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
				messages: [],
				rooms: [],
				selectedRoom: false,
				ROLES,
				USER,
				roles: null,
				search: '',
				filters: {
					roles: []
				},
				newMessage: ''
			}
		},
		components: {
			'select-filter': selectInput
		},
		computed: {
			filteredUsers() {
				return ''
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
			async setSelectedRoom(room) {
				try {
					this.selectedRoom = room
					if(this.roomUnreadMessages(room).length) {
						this.selectedRoom.items.forEach(e => e.is_read = '1')
						const data = {
							from_id: room.to_id
						}

						const url = new URL(location.origin + '/api/messages/my/')

						const req = await fetch(url, {
							method: 'POST',
							headers: {
								'Accept': 'application/json',
								'Content-Type': 'application/json'
							},
							body: JSON.stringify(data)
						})
						const result = await req.json()
						if(result.error) throw new Error()

						console.log(result)
					}
				} catch(err) {
					console.log(err)
				}
			},
			roomUnreadMessages(room) {
				return room.items.filter(m => !Number(m.is_read) && m.from_id != this.USER.id)
			},
			setFilter(filterArr, item) {
				const itemIndex = filterArr.findIndex(e => e == item)
				if(itemIndex != -1) {
					filterArr.splice(itemIndex, 1)
				} else {
					filterArr.push(item)
				}
			},
			async send(user) {
				try {
					if(!this.selectedRoom || !this.newMessage.length) return
					
					const data = {
						to_id: this.selectedRoom.to_id,
						text: this.newMessage
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
					
					this.selectedRoom.items.push(result.data)
					
					this.newMessage = ''
					
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
					const url = new URL(location.origin + '/api/messages/my')
			
					const req = await fetch(url, {
						headers: {
							'Accept': 'application/json'
						}
					})
					const { items } = await req.json()
					
					const messagesObj = items.reduce((a, b) => {
						if(a[b.room]) {
							a[b.room].items.push(b)
						} else {
							a[b.room] = {
								id: b.room,
								items: [b],
								from_name: b.from_id != this.USER.id ? b.from_user.field_fullname : b.to_user.field_fullname,
								to_id: b.from_id != this.USER.id ? b.from_user.id : b.to_user.id
							}
						}
						return a
					}, {})
					
					console.log({messagesObj})
					
					this.rooms = Object.values(messagesObj)
					
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