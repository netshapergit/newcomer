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
				msg: 'fefefef',
				courses: [],
				programs: [],
				isNewEntityCreateModalShowed: false,
				tag: '',
				search: {
					tags: []
				},
				newObject: {
					title: '',
					alias: '', //cyrillicToTranslit().transform(parsed.name + parsed.patronymic, '-').toLowerCase()
					image: '',
				}
			}
		},
		computed: {
			tags() {
				const tagsArr = Array.from(new Set(this.filteredData.map(e => e.field_tags).flat())).map(e => ({text: e, type: 'tag'}))
				const headersArr = Array.from(new Set(this.filteredData.map(e => e.field_header))).map(e => ({text: e, type: 'header'}))
				return tagsArr.concat(headersArr)
			},
			filteredTags() {
				return this.tags.filter(e => e.text.toLowerCase().includes(this.tag.toLowerCase()))
			},
			filteredData() {
				let items = this.programs
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
							_this.fetchData()
							_this.isNewEntityCreateModalShowed = false
							_this.$toasted.info('Программа создана')
						})
						.fail(function() {
							_this.isNewEntityCreateModalShowed = false
							throw new Error()
						})
					return false
				} catch(err) {
					console.log(err)
					this.$toasted.error('Ошибка: ' + err.message)
				}
			},
			async fetchData() {
				try {
					const url = new URL(location.origin + '/api/programs')
			
					const req = await fetch(url, {
						headers: {
							'Accept': 'application/json'
						}
					})
					const { data } = await req.json()
					
					this.programs = data.map(e => {
						e.field_tags = e.field_tags ? e.field_tags.split(',').map(t => t.trim()) : []
						e.courses_count = e.courses_by_program_id.length
						e.lessons_count = e.courses_by_program_id.reduce((a,b) => {
							a += b.lessons_by_course_id.length
							return a
						}, 0)
						return e
					})
				} catch(err) {
					console.log(err)
				}
			},
			async deletePage(pageId) {
                let isConfirm = confirm("Удалить программу?")
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
                        this.$toasted.info('Программа удалена')
						this.fetchData()
                    } catch(err) {
						console.log(err)
                        this.$toasted.error('Ошибка: ' + err.message)
                    }
				}
            },
		},
		mounted() {
			this.fetchData()
		}
	})
}