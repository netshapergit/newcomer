import { PAGE_ID, uploadFile, uploadImage, parseObject } from './utils.js'
import { testItem } from './component_test_item.js'
	
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
				programs: [],
				teachers: [],
				questions: [],
				newTeacher: '',
				page: null,
				tags: {
					items: [],
					newTag: ''
				},
				tabs: [
					{title: 'Уроки', id: 1},	
					{title: 'Преподаватели', id: 2},
					{title: 'Материалы', id: 3},
					{title: 'Вопрос / Ответ', id: 4}
				],
				activeTab: 1,
				isFullContentShowed: false,
				isNewQuestionModalShow: false,
				newQuestion: {
					text: ''
				}
			}
		},
		components: {
			'test-item': testItem
		},
		computed: {
			testMaxRate() {
				return this.page.field_test_questions.reduce((a, b) => {
					if(b.isNeedCompleteResolve) {
						a += b.rate
					} else {
						const answers = b.question.items.map(e => e.answers).flat()
						let result = 0
						answers.forEach(e => {
							const variant = b.variants.find(v => v.id == e)
							if(variant) result += variant.rate
						})
						a += result
					}
					return a
				}, 0)
			},
			files() {
				return []
				if(!this.page) return []
				return this.page.field_files
			},
			teachersTags() {
				return []
				if(!this.page || this.teachers.length === 0) return []
				const pageTeachers = this.teachers.filter(e => this.page.field_teachers.includes(e.id))
				return pageTeachers.map(e => ({...e, text: e.field_fullname}))
			},
			teachersAutocompleteTags() {
				return []
				if(!this.page || this.teachers.length === 0) return []
				const pageTeachers = this.teachers.filter(e => !this.page.field_teachers.includes(e.id))
				return pageTeachers.map(e => ({...e, text: e.field_fullname}))
			},
			teachersFormValue() {
				return []
				if(!this.page) return ''
				return this.page.field_teachers.join()
			},
			filteredPrograms() {
				return []
				if(!this.page) return []
				
				const programs = this.page.programs_by_course_id.map(e => e.id)
				return this.programs.filter(e => !programs.includes(e.id))
			},
			tagsFormValue() {
				return []
				if(!this.page) return ''
				return this.page.field_tags.map(e => e.text).join()
			},
			filesFormValue() {
				return []
				if(!this.page) return ''
				return this.page.field_files.join()
			},
			courseProgramsFormValue() {
				return []
				if(!this.page) return []
				return this.page.programs_by_course_id.map(e => e.id)
			}
		},
		methods: {
			/*
			addNewVariantToQuestion(question) {
				const newVariant = {
					id: `${question.id}-answer-${Date.now()}`,
					text: '',
					isCorrect: false,
					rate: 0
				}
				question.variants.push(newVariant)
			},
			addNewQuestionVariantToTestItem(item) {
				const newQuestionVariant = {
					id: `${item.id}-variant-${Date.now()}`,
					text: '',
					answers: []
				}
				item.question.items.push(newQuestionVariant)
			},
			*/
			deleteTestItem(itemId) {
				let isConfirm = confirm("Удалить задание?")
				if(!isConfirm) return;
				
				this.page.field_test_questions = this.page.field_test_questions.filter(e => e.id !== itemId)
			},
			addNewTestItem() {
				const newTestItem = {
					id: 'q-' + Date.now(),
					question: {
						title: '',
						items: []
					},
					rate: 1,
					isNeedCompleteResolve: false,
					variants: []
				}
				this.page.field_test_questions.unshift(newTestItem)
			},
			async onNewQusetionFormSubmit() {
				try {
					if(!this.teachersTags.length|| !this.newQuestion.text) return
					const data = {
						page_id: PAGE_ID,
						to_id: this.teachersTags[0].id,
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
			setNewTeachers(newTeachers) {
				//console.log(newTeachers)
				this.page.field_teachers = newTeachers.filter(e => !!e.id).map(e => e.id)
				//console.log(this.page.field_teachers)
			},
			removeProgram(programId) {
				this.page.programs_by_course_id = this.page.programs_by_course_id.filter(e => e.id !== programId)
			},
			addProgram(program) {
				this.page.programs_by_course_id.push(program)
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
					const url = new URL(location.origin + '/api/tests/' + PAGE_ID)
			
					const req = await fetch(url, {
						headers: {
							'Accept': 'application/json'
						}
					})
					const { data: {page} } = await req.json()
					
					//page.field_tags = page.field_tags ? page.field_tags.split(',').map(t => ({text: t.trim()})) : []
					//page.field_files = page.field_files ? page.field_files.split(',') : []//.map(t => ({text: t.trim()})) : []
					//page.field_teachers = page.field_teachers ? page.field_teachers.split(',') : []
					//page.field_faq = parseObject(page.field_faq, [])
					
					page.field_test_questions = parseObject(page.field_test_questions, [])
					
					//this.programs = programs
					this.page = page
					//this.teachers = teachers
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