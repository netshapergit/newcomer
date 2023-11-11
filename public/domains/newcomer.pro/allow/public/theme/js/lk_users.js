import { ROLES } from './enums.js'
import { USER } from './utils.js'
import { selectInput } from './component_select.js'

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
				users: [],
				ROLES,
				USER,
				roles: null,
				search: '',
				filters: {
					roles: []
				}
			}
		},
		components: {
			'select-filter': selectInput
		},
		computed: {
			filteredRoles() {
				return this.ROLES.filter(e => e.id != 8)
			},
			filteredUsers() {
				let items = this.users;
				
				if(this.filters.roles.length > 0) {
					items = items.filter(e => this.filters.roles.some(l => l == e.field_role_id))
				}
				
				if(this.search) {
					items = items.filter(e => e.field_fullname && e.field_fullname.toLowerCase().includes(this.search.toLowerCase()))
				}
				
				 return items
			}
		},
		methods: {
			canEditUser(user) {
				return this.USER.id != user.id || user.field_role_id != '8'
			},
			setFilter(filterArr, item) {
				const itemIndex = filterArr.findIndex(e => e == item)
				if(itemIndex != -1) {
					filterArr.splice(itemIndex, 1)
				} else {
					filterArr.push(item)
				}
			},
			onUserActiveStatusChange(userActiveStatus) {
				userActiveStatus = !Boolean(Number(userActiveStatus))
			},
			async saveUser(user) {
				try {
					const data = {
						active: String(Number(user.active)),
						field_role_id: user.field_role_id
					}
					console.log(data)
					const url = new URL(location.origin + '/api/users/' + user.id)
			
					const req = await fetch(url, {
						method: 'POST',
						headers: {
							'Accept': 'application/json',
							'Content-Type': 'application/json'
						},
						body: JSON.stringify(data)
					})
					const result = await req.json()
					
					console.log(result)
					this.$toasted.info('Сохранено')
				} catch(err) {
					console.log(err)
					this.$toasted.error('Ошибка: ' + err.message)
				}
			},
			userRoleName(roleId) {
				if(!this.roles) return ''
				const role = this.ROLES.find(e => e.id == roleId)
				return role ? role.name_ru : ''
			},
			async fetchData() {
				try {
					const url = new URL(location.origin + '/api/users/')
			
					const req = await fetch(url, {
						headers: {
							'Accept': 'application/json'
						}
					})
					const { users, roles } = await req.json()
					
					this.users = users.map(e => {
						e.active = !!Number(e.active)
						return e
					})
					this.roles = roles
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