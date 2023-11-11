import { debounce } from './utils.js'

//console.log(cyrillicToTranslit().transform('груцауа'))
	
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
				tag: '',
				courses: [],
				programs: [],
				search: {
					query: '',
					tags: []
				},
				isNewEntityCreateModalShowed: false,
				newObject: {
					title: '',
					alias: '',
					image: '',
					course_programs: []
				}
			}
		},
		computed: {
			tags() {
				const tagsArr = Array.from(new Set(this.filteredCourses.map(e => e.field_tags).flat())).map(e => ({text: e, type: 'tag'}))
				const headersArr = Array.from(new Set(this.filteredCourses.map(e => e.field_header))).map(e => ({text: e, type: 'header'}))
				return tagsArr.concat(headersArr)
			},
			filteredTags() {
				return this.tags.filter(e => e.text.toLowerCase().includes(this.tag.toLowerCase()))
			},
			filteredCourses() {
				let items = this.courses
				if(this.search.tags.length) {
					items = items.filter(e => {
						return this.search.tags.every(t => {
							let result = false
							switch(t.type) {
								case 'tag':
									result = e.field_tags.includes(t.text)
									break;
								default:
									result = e.field_header.includes(t.text)
									break;
							}
							return result
						})
					})
				}
				//if(this.search.query) items = items.filter(e => e.field_header.toLowerCase().includes(this.search.query.toLowerCase()))
				return items
			},
			newObjectTransiltedHeader() {
				return cyrillicToTranslit().transform(this.newObject.title.toLowerCase()).replace(' ', '-')
			}
		},
		methods: {
			onSearchInputChanged: debounce(async function(event) {
				console.log(event.target.value) 
			}, 1000),
			async onNewObjectFormSubmit(event) {
				event.preventDefault()
				const _this = this
				try {
					const form = jQuery(this.$refs['new-item-form'])
					const action = form.attr('data-action')
					const data = form.serialize()
					console.log({action: location.origin + action, data})
						
					$.post(action, data)
						.done(function() {
							//noti(true, 'Объект создан')
							//location.reload()
							_this.fetchCourses()
							_this.isNewEntityCreateModalShowed = false
							_this.$toasted.info('Курс создан')
						})
						.fail(function(error) {
							console.log(error)
							_this.isNewEntityCreateModalShowed = false
							throw new Error()
							
						})
					
					return false
				} catch(err) {
					console.log(err)
					this.$toasted.error('Ошибка: ' + err.message)
					//noti(false, 'Ошибка')
				}
			},
			async fetchCourses() {
				try {
					const url = new URL(location.origin + '/api/courses/')
			
					const req = await fetch(url, {
						headers: {
							'Accept': 'application/json'
						}
					})
					const { courses, programs } = await req.json()
					this.courses = courses.map(e => {
						e.field_tags = e.field_tags ? e.field_tags.split(',').map(t => t.trim()) : []
						e.lessons_count = e.lessons_by_course_id.length
						return e
					})
					this.programs = programs
				} catch(err) {
					console.log(err)
				}
			},
			async deletePage(pageId) {
                let isConfirm = confirm("Удалить курс?")
				if(isConfirm) {
                    try {
                        const action = '/user/pages/' + pageId
                        const url = new URL(location.origin + action)

                        const res = await fetch(url, {
                            headers: {
                                'Accept': 'application/json'
                            },
                            method: 'DELETE'
                        })
                        
                        const data = await res.json()
                        console.log(data)
                        //if(data.error) throw new Error(data.error.message)
                        this.$toasted.info('Страница удалена')
						this.fetchCourses()
                    } catch(err) {
						console.log(err)
                        this.$toasted.error('Ошибка: ' + err.message)
                    }
				}
            },
		},
		mounted() {
			this.fetchCourses()
		}
	})
}