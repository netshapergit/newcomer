import { PAGE_ID, USER, uploadFile, uploadImage, parseObject } from './utils.js'
import { hwItem } from './component_hw_item.js'
import { selectInput } from './component_select.js'
import { RATING_SYSTEMS } from './enums.js'

document.addEventListener('DOMContentLoaded', init)

function init() {
	
	Vue.use(Toasted, {
		duration: 3000
	})
	
	const app = new Vue({
		el: '.lk',
		name: 'App',
		data() {
			return {
				items: [],
				RATING_SYSTEMS,
				USER,
				filters: {
					teachers: [],
					students: [],
					lessons: [],
					courses: [],
					status: false
				},
				teachers: [],
				students: []
			}
		},
		components: {
			'hw-item': hwItem,
			'select-filter': selectInput
		},
		computed: {
			filteredItems() {
				let items = this.items
				
				if(this.filters.teachers.length > 0) {
					items = items.filter(e => {
						return e.lesson.field_teachers.some(teacherId => {
							return this.filters.teachers.includes(teacherId)
						})
					})
				}
				
				if(this.filters.lessons.length > 0) {
					items = items.filter(e => this.filters.lessons.some(l => l == e.lesson.id))
				}
				
				if(this.filters.courses.length > 0) {
					items = items.filter(e => this.filters.courses.some(c => e.lesson.courses_by_lesson_id.map(t => t.id).includes(c)))
				}
				
				if(this.filters.students.length > 0) {
					items = items.filter(e => this.filters.students.some(s => s == e.user_id))
				}
				
				if(this.filters.status) {
					items = items.filter(e => e.is_checked != '1')
				}
				
				return items
			},
			lessonsFilterItems() {
				if(!this.items.length) return []
				return this.items.map(e => ({id: e.lesson.id, field_header: e.lesson.field_header})).filter((value, index, self) =>
				  	index === self.findIndex((t) => (
						t.id === value.id
				  	))
				)
			},
			coursesFilterItems() {
				if(!this.items.length) return []
				return this.items.map(e => {
					return e.lesson.courses_by_lesson_id.map(c => {
						return {id: c.id, field_header: c.field_header}
					})									   
			   	}).flat().filter((value, index, self) =>
				  	index === self.findIndex((t) => (
						t.id === value.id
				  	))
				)
			}
		},
		methods: {
			setFilter(filterArr, item) {
				const itemIndex = filterArr.findIndex(e => e == item)
				if(itemIndex != -1) {
					filterArr.splice(itemIndex, 1)
				} else {
					filterArr.push(item)
				}
			},
			async updateItem(item) {
				const data = {
					grade: item.grade,
					is_checked: item.is_checked,
					id: item.id
				}
				try {
					const action = '/api/homeworks'
					const url = new URL(location.origin + action)

					const res = await fetch(url, {
						headers: {
							'Accept': 'application/json',
							'Content-Type': 'application/json'
						},
						method: 'PUT',
						body: JSON.stringify(data)
					})

					const result = await res.json()
					console.log(result)
					//if(data.error) throw new Error(data.error.message)
					this.$toasted.info('Сохранено')
					//this.fetchData()
				} catch(err) {
					console.log(err)
					this.$toasted.error('Ошибка: ' + err.message)
				}
			},
			async deleteItem(itemId) {
				let isConfirm = confirm("Удалить запись?")
				if(isConfirm) {
					try {
                        const action = '/api/homeworks/delete'
                        const url = new URL(location.origin + action)

                        const res = await fetch(url, {
                            headers: {
                                'Accept': 'application/json',
								'Content-Type': 'application/json'
                            },
                            method: 'POST',
							body: JSON.stringify({id: itemId})
                        })
                        
                        const data = await res.json()
                        console.log(data)
                        //if(data.error) throw new Error(data.error.message)
                        this.$toasted.info('Запись удалена')
						this.fetchData()
                    } catch(err) {
						console.log(err)
                        this.$toasted.error('Ошибка: ' + err.message)
                    }
				}
			},
			async fetchData() {
				try {
					const url = new URL(location.origin + '/api/homeworks/my')
			
					const req = await fetch(url, {
						headers: {
							'Accept': 'application/json'
						}
					})
					const { data: {items, teachers, students} } = await req.json()
					console.log(items)
					this.items = items
					this.teachers = teachers
					this.students = students
					
				} catch(err) {
					console.log(err)
				}
			},
		},
		mounted() {
			this.fetchData()
		}
	})
	
}