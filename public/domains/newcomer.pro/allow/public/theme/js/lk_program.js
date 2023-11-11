import { PAGE_ID, uploadFile, uploadImage, parseObject } from './utils.js'

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
				page: null,
				tags: {
					items: [],
					newTag: ''
				},
				tabs: [
					{title: 'Курсы', id: 1},
					{title: 'Вопрос / Ответ', id: 4}
				],
				activeTab: 1,
				isFullContentShowed: false
			}
		},
		computed: {
			files() {
				if(!this.page) return []
				return this.page.field_files
			},
			filteredCourses() {
				if(!this.page) return []
				const pageCourses = this.page.courses_by_program_id.map(e => e.id)
				return this.courses.filter(e => !pageCourses.includes(e.id))
			},
			tagsFormValue() {
				if(!this.page) return ''
				return this.page.field_tags.map(e => e.text).join()
			},
			filesFormValue() {
				if(!this.page) return ''
				return this.page.field_files.join()
			},
		},
		methods: {
			addFAQItem() {
				this.page.field_faq.unshift({question: 'Вопрос', answer: 'Ответ'})
			},
			deleteFile(file) {
				this.page.field_files = this.page.field_files.filter(e => e !== file)
			},
			onSaveChangesButtonClick() {
				this.$refs['save-changes-form-button'].click()
			},
			async saveChanges() {
				const _this = this
				try {
					const form = jQuery(this.$refs['js-opage-form'])
					const action = form.attr('data-action')
					const data = form.serialize()
					console.log({action: location.origin + action, data})
					const fd = new FormData(this.$refs['js-opage-form'])
					console.log({fd})
	
					$.post(action, data)
						.done(function() {
							_this.$toasted.info('Сохранено')
						})
						.fail(function() {
							throw new Error()
						})

				} catch(err) {
					console.log(err)
					this.$toasted.error('Ошибка: ' + err.message)
				}
			},
			async fetchData() {
				try {
					const url = new URL(location.origin + '/api/programs/' + PAGE_ID)
			
					const req = await fetch(url, {
						headers: {
							'Accept': 'application/json'
						}
					})
					const { data: {courses, program} } = await req.json()
					console.log(program)
					this.courses = courses
					program.field_tags = program.field_tags ? program.field_tags.split(',').map(t => ({text: t.trim()})) : []
					program.field_files = program.field_files ? program.field_files.split(',') : []//.map(t => ({text: t.trim()})) : []
					program.field_faq = parseObject(program.field_faq, [])
					this.page = program
					//this.tags.items = program.field_tags.map(e => ({text: e}))
				} catch(err) {
					console.log(err)
				}
			},
			onAddFileClick(refId) {
				console.log(this.$refs[refId])
				this.$refs[refId].click()
			},
			async onImageUpload(e) {
				try {
					const res = await uploadImage(e)
					console.log(res)
					this.page.field_image = res
				} catch(err) {
					console.log(err)
					noti(false, err.message)
				}
			},
			async onFileUpload(e) {
				try {
					const res = await uploadFile(e)
					console.log(res)
					this.page.field_files.push(res)
					//item.images.push(res)
				} catch(err) {
					console.log(err)
					noti(false, err.message)
				}
			},
		},
		mounted() {
			this.fetchData()
		}
	})
}