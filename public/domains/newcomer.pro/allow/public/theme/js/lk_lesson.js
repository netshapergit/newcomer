import { PAGE_ID, uploadFile, uploadImage, parseObject } from './utils.js'
import { faqItem } from './component_faq_item.js'

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
				lessons: [],
				courses: [],
				teachers: [],
				newTeacher: '',
				isNewQuestionModalShow: false,
				studentHomework: null,
				page: null,
				homeworkOptions: {
					type: [],
				},
				tags: {
					items: [],
					newTag: ''
				},
				faqSearch: '',
				homework: {
					file: '',
					text: ''
				},
				newQuestion: {
					text: ''
				}
			}
		},
		components: {
			'faq-item': faqItem
		},
		computed: {
			filteredFaqItems() {
				if(!this.faqSearch) return this.page.field_faq
				return this.page.field_faq.filter(e => e.question.toLowerCase().includes(this.faqSearch.toLowerCase()))
			},
			files() {
				if(!this.page) return []
				return this.page.field_files
			},
			teachersTags() {
				if(!this.page || this.teachers.length === 0) return []
				const pageTeachers = this.teachers.filter(e => this.page.field_teachers.includes(e.id))
				return pageTeachers.map(e => ({...e, text: e.field_fullname}))
			},
			teachersAutocompleteTags() {
				if(!this.page || this.teachers.length === 0) return []
				const pageTeachers = this.teachers.filter(e => !this.page.field_teachers.includes(e.id))
				return pageTeachers.map(e => ({...e, text: e.field_fullname}))
			},
			teachersFormValue() {
				if(!this.page) return ''
				return this.page.field_teachers.join()
			},
			filteredCourses() {
				if(!this.page) return []
				//return []
				const courses = this.page.courses_by_lesson_id.map(e => e.id)
				return this.courses.filter(e => !courses.includes(e.id))
			},
			tagsFormValue() {
				if(!this.page) return ''
				return this.page.field_tags.map(e => e.text).join()
			},
			filesFormValue() {
				if(!this.page) return ''
				return this.page.field_files.join()
			},
			lessonCoursesFormValue() {
				if(!this.page) return []
				//return []
				return this.page.courses_by_lesson_id.map(e => e.id)
			},
			homeworkTypeFormValue() {
				if(!this.page) return ''
				return this.page.field_homework_type.join()
			},
		},
		methods: {
			async onNewQusetionFormSubmit() {
				try {
					if(!this.page.field_teachers.length|| !this.newQuestion.text) return
					const data = {
						page_id: PAGE_ID,
						to_id: this.page.field_teachers[0],
						text: this.newQuestion.text
					}
					console.log(data)
		
					const url = new URL(location.origin + '/api/messages/')
			
					const req = await fetch(url, {
						method: 'POST',
						headers: {
							'Accept': 'application/json',
							'Content-Type': 'application/json'
						},
						body: JSON.stringify(data)
					})
					const result = await req.json()
					if(result.error) throw new Error(result.error.message)
					this.$toasted.info('Вопрос отправлен')
					this.isNewQuestionModalShow = false
				} catch(err) {
					console.log(err)
					this.$toasted.error('Ошибка: ' + err.message)
					this.isNewQuestionModalShow = false
				}
			},
			async onHomeworkSend() {
				if(this.studentHomework) return
				const _this = this
				try {
					const action = '/api/homeworks'
					const data = {
						lesson_id: _this.page.id,
						text: _this.homework.text,
						file: _this.homework.file,
					}

					const res = await fetch(action, {
						method: 'POST',
						headers: {
							'Content-Type': 'application/json'
						},
						body: JSON.stringify(data)
					})
					
					if(!res.ok) throw new Error('')
					
					this.studentHomework = true
					
					const result = await res.json()
					console.log(result)
				} catch(err) {
					console.log(err)
				}
			},
			checkHomeworkType(type) {
				return this.page.field_homework_type.includes(type)
			},
			onHomeworkFileUploadButtonClick() {
				this.$refs['hw-file'].click()
			},
			setNewTeachers(newTeachers) {
				//console.log(newTeachers)
				this.page.field_teachers = newTeachers.filter(e => !!e.id).map(e => e.id)
				//console.log(this.page.field_teachers)
			},
			removeCourse(courseId) {
				this.page.courses_by_lesson_id = this.page.courses_by_lesson_id.filter(e => e.id !== courseId)
			},
			addCourse(course) {
				this.page.courses_by_lesson_id.push(course)
			},
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
					const url = new URL(location.origin + '/api/lessons/' + PAGE_ID)
			
					const req = await fetch(url, {
						headers: {
							'Accept': 'application/json'
						}
					})
					const { data: {page, courses, teachers, homework} } = await req.json()
					
					page.field_tags = page.field_tags ? page.field_tags.split(',').map(t => ({text: t.trim()})) : []
					page.field_files = page.field_files ? page.field_files.split(',') : []//.map(t => ({text: t.trim()})) : []
					//page.field_teachers = page.field_teachers ? page.field_teachers.split(',') : []
					page.field_homework_type = page.field_homework_type ? page.field_homework_type.split(',') : []
					page.field_faq = parseObject(page.field_faq, [])
					
					this.courses = courses
					this.page = page
					this.teachers = teachers
					this.studentHomework = homework
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
					//noti(false, err.message)
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
					//noti(false, err.message)
				}
			},
			async onHomeworkFileUpload(e) {
				try {
					const res = await uploadFile(e)
					console.log(res)
					this.homework.file = res
					//item.images.push(res)
				} catch(err) {
					console.log(err)
					//noti(false, err.message)
				}
			},
		},
		mounted() {
			this.fetchData()
		}
	})
}