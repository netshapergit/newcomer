import { PAGE_ID, USER, uploadFile, uploadImage, parseObject } from './utils.js'
import { ROLES } from './enums.js'
	
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
				user: USER
			}
		},
		computed: {
			userRoleName() {
				const role = ROLES.find(e => e.id == this.user.field_role_id)
				return role ? role.name_ru : ''
			}
			
		},
		methods: {
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
			onAddFileClick(refId) {
				this.$refs[refId].click()
			},
			async onImageUpload(e) {
				try {
					const res = await uploadImage(e)
					console.log(res)
					this.user.field_image = res
				} catch(err) {
					console.log(err)
					this.$toast.error('Ошибка: ' + err.message)
				}
			},
		},
		mounted() {
			
		}
	})
}