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
				tests: [],
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
					image: ''
				}
			}
		},
		computed: {
			tags() {
				return this.search.tags
				const tagsArr = Array.from(new Set(this.filteredCourses.map(e => e.field_tags).flat())).map(e => ({text: e, type: 'tag'}))
				const headersArr = Array.from(new Set(this.filteredCourses.map(e => e.field_header))).map(e => ({text: e, type: 'header'}))
				return tagsArr.concat(headersArr)
			},
			filteredTags() {
				return this.tags.filter(e => e.text.toLowerCase().includes(this.tag.toLowerCase()))
			},
			filteredTests() {
				return this.tests
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
							_this.fetchTests()
							_this.isNewEntityCreateModalShowed = false
							_this.$toasted.info('Тест создан')
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
			async fetchTests() {
				try {
					const url = new URL(location.origin + '/api/tests/')
			
					const req = await fetch(url, {
						headers: {
							'Accept': 'application/json'
						}
					})
					const { data: {tests} } = await req.json()
					console.log(tests)
					this.tests = tests
					
				} catch(err) {
					console.log(err)
				}
			},
			async deletePage(pageId) {
                let isConfirm = confirm("Удалить тест?")
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
                        this.$toasted.info('Тест удален')
						this.fetchTests()
                    } catch(err) {
						console.log(err)
                        this.$toasted.error('Ошибка: ' + err.message)
                    }
				}
            },
		},
		mounted() {
			this.fetchTests()
		}
	})
}