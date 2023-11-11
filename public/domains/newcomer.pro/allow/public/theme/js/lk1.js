document.addEventListener('DOMContentLoaded', function() {
	
	$('.page').append('<div id="form-notification"><div class="form-notification__text"></div></div>')
	
	const isMobile = $(window).width() < 768

 	function noti(isSuccess, text) {
		//let text = isSuccess ? 'Ваша заявка отправлена!' : 'Ошибка!',
		const classify = isSuccess ? 'done' : 'error'
		$('#form-notification').addClass('active').attr('data-class', classify)
		$('#form-notification .form-notification__text').text(text)
		setTimeout(function() {
			$('#form-notification').removeClass('active')
		}, 4000)
	}

	
	const userID = $('.lk').attr('data-user-id')
	
	async function uploadImg(e) {
		try {
		// добавить эту функцию на обработчик @change к input[type="file"]
		let img = e.target.files[0]
		let formData = new FormData()
		formData.append("file", img)
		return await fetch('/user/upload_images', {
			method: "POST", body: formData
		}).then(r => r.json())
			.then(data => {
				if(data.error) throw new Error(data.error)
				return data.fileName
			})
		} catch(error) {
			console.log(error)
			throw error
		}
	}
	
	async function onAvatarChangeHandler(e) {
		try {
			let result = await uploadImg(e)
			console.log(result)
			$('#uef').find('input[name="field_image"]')[0].value = result
			$('#uef').submit()
			console.log($('#uef').find('input[name="field_image"]'))
			return result
		} catch(error) {
			console.log(error)
		}
	} 
	
	function onUEFSubmitHandler(e) {
		try {
			e.preventDefault();
			
			let vm = e.target
			//$loader.show()
			let serializedData = $(vm).serialize();
			console.log(serializedData)
			let action = $(vm).attr('data-action');
			
			$.post(action, serializedData)
				.done(function() { 
					noti(true, 'Информация обновлена') 
				})
				.fail(function() { 
					noti(false, 'Ошибка') 
				})
			return false
		} catch(error) {
			console.log(error)
		}
	}
	
	const memo = {}
	
	const VOC_VACATION_TYPES = {
		'default': 'Обычный',
		'education': 'Учебный',
		'self_paid': 'За свой счет'
	}
	
	const onClickAway = window.VueClickaway.directive
	const myId = $('#lk-header').attr('data-user-id')
	
	const V_HEADER = new Vue({
		el: '#lk-header',
		name: 'HEADER',
		directives: {
			onClickAway: onClickAway,
		},
		data() {
			return {
				requests: [],
				empls: [],
				currentUser: null
			}
		},
		computed: {
			notAcceptedRequests() {
				if(!this.currentUser) return this.requests
				if(false) {
				//if(this.currentUser.field_is_hr == 1) {
					console.log('hr')
					return this.requests.filter(e => e.hr_accepted != 1)
				} else {
					return this.requests.filter(e => {
						if(e.substitutor == myId && e.substitutor_accepted != 1 && e.substitutor_denied != 1) {
							console.log('substitutor')
							return true
						} 
						if(e.coordinator == myId && e.coordinator_accepted != 1 && e.coordinator_denied != 1) {
							console.log('coordinator')
							return true
						} 
						if(e.acceptor == myId && e.hr_accepted != 1 && e.hr_denied != 1) {
							console.log('coordinator')
							return true
						} 
						return false
					})
				}
			}
		},
		async mounted() {
			try {
				const requestsReq = await fetch('/api/orders/requested')
				const requestsData = await requestsReq.json()
				const fRequestsData = requestsData.data.map(e => {
					const dates = JSON.parse(e.dates)
					e.dates = {
						start: new Date(dates[0]).toLocaleDateString(),
						end: new Date(dates[1]).toLocaleDateString()
					}
					return e
				})
				this.requests = fRequestsData

				const emplsReq = await fetch('/api/users')
				const emplsData = await emplsReq.json()
				this.empls = emplsData.data

				this.currentUser = this.empls.find(e => e.id == myId)
				
				const iconNav = document.querySelector('.main-nav__icon');
				if (iconNav) {
					const wrapperNav = document.querySelector('.main-nav__wrapper');
					iconNav.addEventListener("click", function (e) {
						document.body.classList.toggle('lock');
						iconNav.classList.toggle('active');
						wrapperNav.classList.toggle('active');
					});
				};

			} catch(e) {
				console.log(e)
			}
		}
	})
	
	if($('#lk-object-page').length > 0) {
		const objectPageData = parseObject($('#lk-object-page').attr('data-json'), {})
		$('#lk-object-page').attr('data-json', null)
		
		objectPageData.field_calendar_gallery = parseObject(objectPageData.field_calendar_gallery, [])
		objectPageData.field_is_synology = !!Number(objectPageData.field_is_synology)
		
		
		console.log({objectPageData})
		
		const LK_OBJECT = new Vue({
			el: '#lk-object-page',
			data() {
				return {
					objectPageData,
					objectNewDay: null,
					selectedGalleryDay: null,
					isEditMode: false
				}
			},
			watch: {
				'objectPageData.field_calendar_gallery': {
					deep: true,
					handler: async function(v) {
						console.log('save changes')
						//await this.saveChanges()
					}
				},
				selectedGalleryDay: {
					deep: true,
					handler: function(v) {
						if(!v.images.length) return; 
						this.$nextTick().then(function() {
							if(window.oPageSplide) {
								window.oPageSplide.destroy()
							}
							
							if(window.oPageSplideNav) {
								window.oPageSplideNav.destroy()
							}
							
							window.oPageSplide = new Splide('.lk-opage-gallery-slider.splide', {
								type: 'slide'
							})
							
							window.oPageSplideNav = new Splide( '.lk-opage-gallery-slider-nav.splide', {
								fixedWidth  : 100,
								fixedHeight : 60,
								gap         : 10,
								rewind      : true,
								pagination  : false,
								isNavigation: true,
								//focus: 'center',
								arrows: false,
								breakpoints : {
									600: {
									  fixedWidth : 60,
									  fixedHeight: 44,
									},
								},
							} )
							
							oPageSplide.sync( oPageSplideNav );
							oPageSplide.mount()
							oPageSplideNav.mount();
							
							//oPageSplide.refresh()
							//oPageSplideNav.refresh()
						})
					}
				}
			},
			computed: {
			  	galleryItems() {
					let sortedItems = this.objectPageData.field_calendar_gallery.sort((a, b) => {
						return new Date(a.date).getTime() - new Date(b.date).getTime()
					})
					if(this.isEditMode) return sortedItems//this.objectPageData.field_calendar_gallery
					return /*this.objectPageData.field_calendar_gallery*/sortedItems.filter(e => e.images.length > 0)
				},
				disabledDates() {
					const dates = this.objectPageData.field_calendar_gallery.map(e => new Date(e.date))
					console.log({dates})
					return dates
				}
			},
			methods: {
				formatDate(date) {
					return new Date(date).toLocaleString('default', { month: 'long', day: 'numeric', year: 'numeric'})
				},
				async saveChanges() {
					try {
					const form = jQuery(this.$refs['js-opage-form'])
					const action = form.attr('data-action')
					const data = form.serialize()
					console.log({action: location.origin + action, data})
					const fd = new FormData(this.$refs['js-opage-form'])
					console.log({fd})
					/*
					const res = await fetch(location.origin + action, {
						method: 'POST',
						body: JSON.stringify(data)
					})
					const parsed = await res.text()
					console.log(parsed)
					*/
					$.post(action, data)
						.done(function() {
							noti(true, 'Сохранено')
						})
						.fail(function() {
							throw new Error()
						})
					
					} catch(err) {
						console.log(err)
						noti(false, 'Ошибка')
					}
				},
				deleteGalleryDay(itemDate) {
					this.objectPageData.field_calendar_gallery = this.objectPageData.field_calendar_gallery.filter(e => e.date !== itemDate)
				},
				deleteGalleryDayImage(imageToRemove) {
					this.selectedGalleryDay.images = this.selectedGalleryDay.images.filter(e => e !== imageToRemove)
				},
				setObjectDay(rawDate) {
					if(!rawDate) return;
					const dateString = rawDate.toLocaleDateString()
					const isDateAlreadyExist = this.objectPageData.field_calendar_gallery.find(e => e.date == dateString)
					if(isDateAlreadyExist) return noti(false, 'День с такой датой уже добавлен')
					
					const dateArr = dateString.split('.')
					const dateS = [dateArr[1], dateArr[0], dateArr[2]].join('/')
					
					const newGalleryItem = {
						date: dateS,
						images: []
					}
					this.objectPageData.field_calendar_gallery.push(newGalleryItem)
				},
				async onImageUpload(item, e) {
					try {
						const res = await uploadImg(e)
						console.log(res)
						item.images.push(res)
					} catch(err) {
						console.log(err)
						noti(false, err.message)
					}
				},
				onAddImageClick(refId) {
					console.log(this.$refs[refId])
					
					this.$refs[refId].click()
				},
				onNewObjectFormImageButtonClick() {
					this.$refs['lk-object-new'].click()
				},
				async onImageUpload2(e) {
					try {
						const res = await uploadImg(e)
						console.log(res)
						this.objectPageData.field_image = res
					} catch(err) {
						console.log(err)
						noti(false, err.message)
					}
				}
			},
			mounted() {
				if(this.objectPageData.field_calendar_gallery.length) {
					this.selectedGalleryDay = this.objectPageData.field_calendar_gallery[0]
				}
				Fancybox.bind("[data-fancybox]", {});
			}
		})
		
	}
	
	if($('#lk-objects').length > 0) {
		
		const objectsData = parseObject($('#lk-objects').attr('data-json'), [])
		$('#lk-objects').attr('data-json', null)
		
		const V_OITEM = Vue.component('lk-object', {
			template: `
				<div class="lk-objects-list-item" v-once>
					<div class="lk-objects-list-item__img">
						<a :href="item.path">
							<img :src="'/site/data/images/medium/' + item.field_image">
						</a>
					</div>
					<div class="lk-objects-list-item__main">
						<div class="lk-objects-list-item__title">
							<a :href="item.path">{{ item.field_header }}</a>
						</div>
					</div>
				</div>
			`,
			name: 'V_OITEM',
			props: {
				item: {}
			}
		})
	
		const LK_OBJECTS = new Vue({
			name: 'LK_OBJECTS',
			el: '#lk-objects',
			data() {
				return {
					objectsData,
					searchQuery: '',
					isNewItemFormShowed: false,
					newObject: {
						title: '',
						alias: '', //cyrillicToTranslit().transform(parsed.name + parsed.patronymic, '-').toLowerCase()
						image: '',
						field_synology: ''
					}
				}
			},
			computed: {
				filteredObjects() {
					if(this.searchQuery) {
						return this.objectsData.filter(e => e.field_header.toLowerCase().includes(this.searchQuery.toLowerCase()))
					}
					return this.objectsData
				},
				newObjectAlias() {
					return cyrillicToTranslit().transform(this.newObject.title, '-').toLowerCase()
				}
			},
			methods: {
				onNewObjectFormImageButtonClick() {
					this.$refs['lk-object-new'].click()
				},
				onNewObjectFormSubmitButtonClick() {
					this.$refs['new-item-form-submit-btn'].click()
				},
				async onImageUpload(e) {
					try {
						const res = await uploadImg(e)
						console.log(res)
						this.newObject.image = res
					} catch(err) {
						console.log(err)
						noti(false, err.message)
					}
				},
				async onNewObjectFormSubmit() {
					try {
						const form = jQuery(this.$refs['new-item-form'])
						const action = form.attr('data-action')
						const data = form.serialize()
						console.log({action: location.origin + action, data})
						
						$.post(action, data)
							.done(function() {
								noti(true, 'Объект создан')
								location.reload()
							})
							.fail(function() {
								throw new Error()
							})
					
					} catch(err) {
						console.log(err)
						noti(false, 'Ошибка')
					}
				}
			}
		})
	}
	
	if($('#lk-requests').length > 0) {
		const V_REQUESTS = new Vue({
			el: '#lk-requests',
			name: 'REQUESTS',
			directives: {
				onClickAway: onClickAway,
			},
			data() {
				return {
					requests: [],
					empls: [],
					currentUser: null
				}
			},
			methods: {
				getAcceptorTitle(type) {
					switch (type) {
						case 'vacation':
							return 'Замещающий'
							break;
						case 'business_trip':
							return 'Согласующий'
							break;
						default:
							return 'Согласующий'
					}
				},
				getRequestTitle(type) {
					switch (type) {
						case 'vacation':
							return 'Заявка на отпуск'
							break;
						case 'business_trip':
							return 'Заявка на командировку'
							break;
						default:
							return 'Заявка'
					}
				},
				acceptRequestBtnText(isAccepted) {
					if(isAccepted) return 'Согласовано'
					return 'Согласовать'
				},
				denyRequestBtnText(isDenied) {
					if(isDenied) return 'Отклонено'
					return 'Отклонить'
				},
				requestStatusText(item) {
					if(item.hr_denied == 1 || item.substitutor_denied == 1 || item.coordinator_denied == 1) return 'Отклонено'
					if(item.hr_accepted == 1) return 'Одобрено'
					return 'Согласование'
				},
				isRequestHasStatus(item) {
					if(!this.currentUser) return false
					if((item.substitutor == myId && item.substitutor_denied == 1) || (item.substitutor == myId && item.substitutor_accepted == 1)) return true
					if((item.coordinator == myId && item.coordinator_denied == 1) || (item.coordinator == myId && item.coordinator_accepted == 1)) return true
					if((item.acceptor == myId && item.hr_denied == 1) || (item.acceptor == myId && item.hr_accepted == 1)) return true
					//if((this.currentUser.field_is_hr == 1 && item.hr_denied == 1) || (this.currentUser.field_is_hr == 1 && item.hr_accepted == 1)) return true
					return false
				},
				isAccepted(item) {
					if(!this.currentUser) return false
					if(item.substitutor == myId && item.substitutor_accepted == 1) {
						//console.log(myId, 'substitutor')
						return true
					} 
					if(item.coordinator == myId && item.coordinator_accepted == 1) {
						//console.log(myId, 'coordinator')
						return true
					} 
					if(item.acceptor == myId && item.hr_accepted == 1) {
						//console.log(myId, 'coordinator')
						return true
					} 
					return false
				},
				isDenied(item) {
					if(!this.currentUser) return false
					if(item.substitutor == myId && item.substitutor_denied == 1) return true
					if(item.coordinator == myId && item.coordinator_denied == 1) return true
					if(item.acceptor == myId && item.hr_denied == 1) return true
					return false
				},
				async deniedRequest(requestId, isDenied = false) {
					try {
						const data = {
							id: requestId
						}
						console.log(isDenied)
						let url = '/api/orders/requested/denied'
						if(isDenied) {
							url = '/api/orders/requested/undenied'
						}
						const req = await fetch(url, {
							headers: {
								'Content-Type': 'application/json'
							},
							method: 'POST',
							body: JSON.stringify(data)
						})
						if(!req.ok) throw new Error()
						
						const parsed = await req.json()
						let item = this.requests.find(e => e.id == parsed.data.id)
						item.substitutor_denied = parsed.data.substitutor_denied
						item.coordinator_denied = parsed.data.coordinator_denied
						item.hr_denied = parsed.data.hr_denied
						
						noti(true, 'Статус заявки изменен')
					} catch(e) {
						console.log(e)
						noti(false, 'Ошибка')
					}
				},
				async denyRequest(requestId) {
					try {
						const data = {
							id: requestId
						}
						const req = await fetch('/api/orders/requested/deny', {
							headers: {
								'Content-Type': 'application/json'
							},
							method: 'POST',
							body: JSON.stringify(data)
						})
						if(!req.ok) throw new Error()
						
						const parsed = await req.json()
						let item = this.requests.find(e => e.id == parsed.data.id)
						item.substitutor_accepted = parsed.data.substitutor_accepted
						item.coordinator_accepted = parsed.data.coordinator_accepted
						item.hr_accepted = parsed.data.hr_accepted
						
						noti(true, 'Согласование отменено')
					} catch(e) {
						console.log(e)
						noti(false, 'Ошибка')
					}
				},
				async acceptRequest(requestId, isAccepted = false) {
					try {
						const data = {
							id: requestId
						}
						let url = '/api/orders/requested/accept'
						if(isAccepted) {
							url = '/api/orders/requested/deny'
						}
						const req = await fetch(url, {
							headers: {
								'Content-Type': 'application/json'
							},
							method: 'POST',
							body: JSON.stringify(data)
						})
						if(!req.ok) throw new Error()
						
						const parsed = await req.json()
						let item = this.requests.find(e => e.id == parsed.data.id)
						item.substitutor_accepted = parsed.data.substitutor_accepted
						item.coordinator_accepted = parsed.data.coordinator_accepted
						item.hr_accepted = parsed.data.hr_accepted
						console.log(item)
						noti(true, 'Статус заявки изменен')
					} catch(e) {
						console.log(e)
						noti(false, 'Ошибка')
					}
				},
				getVacationType(type) {
					return VOC_VACATION_TYPES[type]
				},
				getUserNameById(id) {
					const user = this.empls.find(e => e.id == id)
					if(!user) return ''
					return user.field_fullname
				}
			},
			async mounted() {
				try {
					const requestsReq = await fetch('/api/orders/requested')
					const requestsData = await requestsReq.json()
					const fRequestsData = requestsData.data.map(e => {
						const dates = JSON.parse(e.dates)
						e.dates = {
							start: new Date(dates[0]).toLocaleDateString(),
							end: new Date(dates[1]).toLocaleDateString()
						}
						return e
					})
					this.requests = fRequestsData
						
					const emplsReq = await fetch('/api/users')
					const emplsData = await emplsReq.json()
					this.empls = emplsData.data
					
					this.currentUser = this.empls.find(e => e.id == myId)
			
				} catch(e) {
					console.log(e)
				}
			}
		})
	}
	
	if($('#lk-main').length > 0) {
		const MAIN = new Vue({
			el: '#lk-main',
			name: 'MAIN',
			directives: {
				onClickAway: onClickAway,
			},
			data() {
				return {
					empls: [],
					selectedEmpl: null,
					search: '',
					currentUser: null,
					currentUserRequests: [],
					isShowVacancyRequestModal: false,
					isShowBTripRequestModal: false,
					isShowEquipRequestModal: false,
					isShowArchived: false,
					departments: {
						items: [
							{value: '', title: 'Все'},
							{value: '1', title: 'Администрация'},
							{
								value: '2', 
								title: 'Управление инженерной геологии и геотехники',
								items: [
									{value: '4', title: 'Отдел геологии'},
									{value: '3', title: 'Отдел обследования зданий и сооружений'}
								]
							},
							{
								value: '7', 
								title: 'Управление геодезических и геоинформационных работ',
								items: [
									{value: '5', title: 'Отдел геоинформационных систем'},
									{value: '6', title: 'Отдел геотехнического мониторинга'}
								]
							}
						]
					},
					currentUserNewContact: {
						title: '',
						value: ''
					},
					vacancyRequestFields: {
						vacancyTypes: {
							items: [
								{title: 'Обычный', value: 'default'},
								{title: 'Учебный', value: 'education'},
								{title: 'За свой счет', value: 'self_paid'}
							],
							selectedItem: {},
							isShowItemsList: false
						},
						vacancyDates: {
							items: [],
							selectedItem: '',
							isShowItemsList: false
						},
						vacancyCoordinator: {
							items: [],
							selectedItem: '',
							isShowItemsList: false,
							departmentFilter: true,
							search: ''
						},
						vacancySubstitutor: {
							items: [],
							selectedItem: '',
							isShowItemsList: false,
							departmentFilter: true,
							search: ''
						}
					},
					bTripRequestFields: {
						bTripTypes: {
							items: [
								{title: 'Проведение переговоров', value: 'negotiation'},
								{title: 'Производственная необходимость', value: 'necessity'},
								{title: 'Участие в мероприятии', value: 'event'},
								{title: 'Другое', value: 'other'}
							],
							selectedItem: {},
							isShowItemsList: false
						},
						bTripDates: {
							items: [],
							selectedItem: '',
							isShowItemsList: false
						},
						bTripCoordinator: {
							items: [],
							selectedItem: '',
							isShowItemsList: false,
							departmentFilter: true,
							search: ''
						},
						bTripSubstitutor: {
							items: [],
							selectedItem: '',
							isShowItemsList: false,
							departmentFilter: true,
							search: ''
						},
						bTripDescription: {
							selectedItem: ''
						},
						bTripCity: {
							selectedItem: ''
						}
					},
					equipRequestFields: {
						equipTypes: {
							items: [
								{title: 'Оборудование', value: 'equipment'},
								{title: 'Кантовары/спецодежда', value: 'stationery_overalls'},
								{title: 'Стройматериалы', value: 'building_materials'},
								{title: 'Другое', value: 'other'}
							],
							selectedItem: {},
							isShowItemsList: false
						},
						equipDates: {
							items: [],
							selectedItem: '',
							isShowItemsList: false
						},
						equipCoordinator: {
							items: [],
							selectedItem: '',
							isShowItemsList: false,
							departmentFilter: true,
							search: ''
						},
						equipSubstitutor: {
							items: [],
							selectedItem: '',
							isShowItemsList: false,
							departmentFilter: true,
							search: ''
						},
						equipDescription: {
							selectedItem: ''
						},
						equipCity: {
							selectedItem: ''
						}
					}
				}
			},
			watch: {
				'equipRequestFields.equipTypes.selectedItem': {
					handler: function(newVal, oldVal) {
						if(!this.currentUser) return
						if(!newVal) return 
						let coord = this.empls.find(e => e.id == 7)
						switch(newVal.value) {
							case 'building_materials':
								if([2, 3, 4].find(e => e == this.currentUser.field_department_id)) {
									coord = this.empls.find(e => e.id == 7)
								}
								if([5, 6, 7].find(e => e == this.currentUser.field_department_id)) {
									coord = this.empls.find(e => e.id == 2)
								}
								break;
							case 'equipment':
								if([2, 3, 4].find(e => e == this.currentUser.field_department_id)) {
									coord = this.empls.find(e => e.id == 7)
								}
								if([5, 6, 7].find(e => e == this.currentUser.field_department_id)) {
									coord = this.empls.find(e => e.id == 2)
								}
								break;
							case 'stationery_overalls':
								coord = this.empls.find(e => e.id == 4)
								break;
							default:
								coord = this.empls.find(e => e.id == 4)
								break;
						}
						this.equipRequestFields.equipCoordinator.selectedItem = coord
					}
				}
			},
			methods: {
				isCanDeleteRequest(item) {
					let res = true
					switch(item.type) {
						case 'equipment':
							if(item.hr_denied == 1 || item.hr_accepted == 1) res = false
							break;
						default:
							if(item.substitutor_denied == 1 || item.substitutor_accepted == 1 || item.coordinator_denied == 1 || item.coordinator_accepted == 1 || item.hr_denied == 1 || item.hr_accepted == 1) res = false
							break;
					}
					return res
				},
				isCanArchiveRequest(item) {
					if(item.hr_accepted == 1 || item.hr_denied == 1) return true
					return false
				},
				isRequestHasStatus(item) {
					if(!this.currentUser) return false
					//if((item.type == 'EQUIPMENT' && item.hr_denied == 1) || (item.type == 'EQUIPMENT' && item.hr_accepted == 1)) return true
					if(item.substitutor_denied == 1 || item.substitutor_accepted == 1 || item.coordinator_denied == 1 || item.coordinator_accepted == 1 || item.hr_denied == 1 || item.hr_accepted == 1) return true
					//if((item.substitutor == myId && item.substitutor_denied == 1) || (item.substitutor == myId && item.substitutor_accepted == 1)) return true
					//if((item.coordinator == myId && item.coordinator_denied == 1) || (item.coordinator == myId && item.coordinator_accepted == 1)) return true
					//if((item.acceptor == myId && item.hr_denied == 1) || (item.acceptor == myId && item.hr_accepted == 1)) return true
					//if((this.currentUser.field_is_hr == 1 && item.hr_denied == 1) || (this.currentUser.field_is_hr == 1 && item.hr_accepted == 1)) return true
					return false
				},
				requestStatusText(item) {
					if(item.hr_denied == 1 || item.substitutor_denied == 1 || item.coordinator_denied == 1) return 'Отклонено'
					if(item.hr_accepted == 1) return 'Одобрено'
					return 'Согласование'
				},
				async deleteRequest(requestId) {
					let isConfirmed = confirm("Удалить заявку?");
					if(isConfirmed) {
						try {
							const data = {
								id: requestId
							}
							let url = '/api/orders/my/delete'
							const req = await fetch(url, {
								headers: {
									'Content-Type': 'application/json'
								},
								method: 'POST',
								body: JSON.stringify(data)
							})
							if(!req.ok) throw new Error()

							const parsed = await req.json()
							this.currentUserRequests = this.currentUserRequests.filter(e => e.id != parsed.data.id)
							
							noti(true, parsed.msg || 'Заявка удалена')
						} catch(e) {
							console.log(e)
							noti(false, 'Ошибка')
						}
					}
				},
				async archiveRequest(requestId) {
					let isConfirmed = confirm("Архивировать заявку?");
					if(isConfirmed) {
						try {
							const data = {
								id: requestId
							}
							let url = '/api/orders/my/archivation'
							const req = await fetch(url, {
								headers: {
									'Content-Type': 'application/json'
								},
								method: 'POST',
								body: JSON.stringify(data)
							})
							if(!req.ok) throw new Error()

							const parsed = await req.json()
							let item = this.currentUserRequests.find(e => e.id == parsed.data.id)
							item.is_archived = parsed.data.is_archived
							console.log(item)
							noti(true, parsed.msg || 'Успешно')
						} catch(e) {
							console.log(e)
							noti(false, 'Ошибка')
						}
					}
				},
				calcExp() {
					if(!this.currentUser) return ''
					const exp = calcDate(this.currentUser.field_working_at, Date.now())
					//console.log(exp)
					const yTexts = ['год', 'года', 'лет']
					let yText = yTexts[0]
					if(exp.years_passed > 1 && exp.years_passed < 5) yText = yTexts[1]
					if(exp.years_passed > 4) yText = yTexts[2]
					
					const mTexts = ['месяц', 'месяца', 'месяцев']
					let mText = mTexts[0]
					if(exp.months_passed > 1 && exp.months_passed < 5) mText = mTexts[1]
					if(exp.months_passed > 4) mText = mTexts[2]
					
					const dTexts = ['день', 'дня', 'дней']
					let dText = dTexts[0]
			
					if(exp.days_passed / 10 >= 2) {
						if(exp.days_passed % 10 > 1 && exp.days_passed % 10 < 5) dText = dTexts[1]
						if(exp.days_passed % 10 > 4) dText = dTexts[2]
					} else {
						if(exp.days_passed > 1 && exp.days_passed < 5) dText = dTexts[1]
						if(exp.days_passed > 4) dText = dTexts[2]
					}
					
					return `${exp.years_passed ? exp.years_passed + ' ' + yText : ''} ${exp.months_passed ? exp.months_passed + ' ' + mText : ''} ${exp.days_passed ? exp.days_passed + ' ' + dText : ''}`
				},
				getVacationType(type) {
					return VOC_VACATION_TYPES[type]
				},
				getUserNameById(id) {
					const user = this.empls.find(e => e.id == id)
					if(!user) return ''
					return user.field_fullname
				},
				async createEquipRequest() {
					const req = {
						type: "EQUIPMENT",
						dates: {
							start: '',
							end: ''
						},
						vacation_type: this.equipRequestFields.equipTypes.selectedItem.value,
						substitutorId: 38,
						coordinatorId: 38,
						acceptorId: this.equipRequestFields.equipCoordinator.selectedItem.id,
						description: this.equipRequestFields.equipDescription.selectedItem,
						location: ''
					}
					await this.createRequest(req)
					this.isShowEquipRequestModal = false
				},
				async createBTripRequest() {
					const req = {
						type: "BUSINESS_TRIP",
						dates: {
							start: this.bTripRequestFields.bTripDates.selectedItem.start,
							end: this.bTripRequestFields.bTripDates.selectedItem.end
						},
						vacation_type: this.bTripRequestFields.bTripTypes.selectedItem.value,
						substitutorId: 1,
						coordinatorId: 33,
						acceptorId: 3,
						description: this.bTripRequestFields.bTripDescription.selectedItem,
						location: this.bTripRequestFields.bTripCity.selectedItem
					}
					await this.createRequest(req)
					this.isShowBTripRequestModal = false
				},
				async createRequest(req) {
					try {
						let dates = ''
						if(req.dates.start && req.dates.end) {
							dates = [req.dates.start.getTime(), req.dates.end.getTime()]
						}
						const newVacationRequestData = {
							"type": req.type,
							"substitutor": req.substitutorId,
							"coordinator": req.coordinatorId,
							"acceptor": req.acceptorId,
							"dates": dates,
							"vacation_type": req.vacation_type,
							"description": req.description,
							"location": req.location
						}
						const res = await fetch('/api/orders', {
							headers: {
								'Content-Type': 'application/json'
							},
							method: 'POST',
							body: JSON.stringify(newVacationRequestData)
						})
						
						
						const reqData = await res.json()
						console.log(reqData.data)
						
						const fdates = JSON.parse(reqData.data.dates)
						reqData.data.dates = {
							start: new Date(dates[0]).toLocaleDateString(),
							end: new Date(dates[1]).toLocaleDateString()
						}
						
						this.currentUserRequests.push(reqData.data)
						this.isShowVacancyRequestModal = false
						noti(true, 'Заявка создана')
					} catch(e) {
						console.log(e)
						noti(false, 'Ошибка')
					}
				},
				async createVacationRequest() {
					try {
						const dates = [this.vacancyRequestFields.vacancyDates.selectedItem.start.getTime(), this.vacancyRequestFields.vacancyDates.selectedItem.end.getTime()]

						const newVacationRequestData = {
							"type": "VACATION",
							"substitutor": this.vacancyRequestFields.vacancySubstitutor.selectedItem.id,
							"coordinator": this.vacancyRequestFields.vacancyCoordinator.selectedItem.id,
							"dates": dates,
							"vacation_type": this.vacancyRequestFields.vacancyTypes.selectedItem.value,
							"acceptor": 33
						}
						const req = await fetch('/api/orders', {
							headers: {
								'Content-Type': 'application/json'
							},
							method: 'POST',
							body: JSON.stringify(newVacationRequestData)
						})
						
						
						const reqData = await req.json()
						console.log(reqData.data)
						
						const fdates = JSON.parse(reqData.data.dates)
						reqData.data.dates = {
							start: new Date(dates[0]).toLocaleDateString(),
							end: new Date(dates[1]).toLocaleDateString()
						}
						
						this.currentUserRequests.push(reqData.data)
						this.isShowVacancyRequestModal = false
						noti(true, 'Заявка создана')
					} catch(e) {
						console.log(e)
						noti(false, 'Ошибка')
					}
				},
				getRequestTitle(type) {
					switch (type) {
						case 'vacation':
							return 'Заявка на отпуск'
							break;
						case 'business_trip':
							return 'Заявка на командировку'
							break;
						case 'equipment':
							return 'Заявка на материалы/оборудование'
							break;
						default:
							return 'Заявка'
					}
				},
				hideEquipCoordinatorSelectItemsList() {
					this.equipRequestFields.equipCoordinator.isShowItemsList = false
				},
				hideEquipTypesSelectItemsList() {
					this.equipRequestFields.equipTypes.isShowItemsList = false
				},
				hideBTripTypesSelectItemsList() {
					this.bTripRequestFields.bTripTypes.isShowItemsList = false
				},
				hideVacancySubstitutorSelectItemsList() {
					this.vacancyRequestFields.vacancySubstitutor.isShowItemsList = false
				},
				hideVacancyTypesSelectItemsList() {
					this.vacancyRequestFields.vacancyTypes.isShowItemsList = false
				},
				hideVacancyCoordinatorSelectItemsList() {
					this.vacancyRequestFields.vacancyCoordinator.isShowItemsList = false
				},
				selectSetItem(select, value) {
					select.selectedItem = value
					select.isShowItemsList = false
				},
				saveUser() {
					//jQuery('#uef').submit()
					//console.log(this.$refs.userform.$el)
					this.$refs.submituserform.click()
				},
				onAvatarClick() {
					jQuery('#lk-avatar').click()
				},
				async onAvatarChange(e) {
					//onAvatarChangeHandler(e)
					try {
						const vm = this
						// добавить эту функцию на обработчик @change к input[type="file"]
						let img = e.target.files[0]
						let formData = new FormData()
						formData.append("file", img)
						const newUserAvatarFileName = await fetch('/user/upload_images', {
							method: "POST", 
							body: formData
						})
							.then(r => r.json())
							.then(data => {
								console.log(data)
								return data.fileName
							})
						
						vm.currentUser.field_image = newUserAvatarFileName
						vm.$nextTick().then(() => vm.saveUser())
						
					} catch(error) {
						console.log(error)
					}
				},
				onUEFSubmit(e) {
					onUEFSubmitHandler(e)
				},
				currentUserAddContact() {
					try {
						if(!this.currentUserNewContact.title || !this.currentUserNewContact.value) return alert('Необходимо заполнить оба поля нового способа связи!')
						this.currentUser.field_contacts_data.push(JSON.parse(JSON.stringify(this.currentUserNewContact)))
						this.currentUserNewContact.title = ''
						this.currentUserNewContact.value = ''
						this.$nextTick().then(() => this.saveUser())
					} catch(error) {
						console.log(error)
					}
				},
				currentUserRemoveContact(itemToRemove) {
					let isConfirmed = confirm("Удалить способ связи?");
					if(isConfirmed) {
						this.currentUser.field_contacts_data = this.currentUser.field_contacts_data.filter(e => e != itemToRemove)
						this.$nextTick().then(() => this.saveUser())
					}
				},
				onChangeDebounced: debounce(function() { 
					this.saveUser()
				}, 1000),
				archiveRequestsButtonText(isArchived) {
					return isArchived ? 'Убрать из архива' : 'Отправить в архив'
				},
			},
			computed: {
				showArchivedRequestsButtonText() {
					return this.isShowArchived ? 'Скрыть архивированные' : 'Показать архивированные'
				},
				currentUserFilteredRequests() {
					let reqs = this.currentUserRequests
					if(!this.isShowArchived) {
						reqs = reqs.filter(e => e.is_archived != 1)
					}
					
					return reqs
				},
				vacancyRequestFieldSubstitutorEmplsList() {
					let empls = this.empls
					
					if(this.vacancyRequestFields.vacancySubstitutor.departmentFilter && this.currentUser) {
						empls = empls.filter(e => e.field_department_id == this.currentUser.field_department_id)
					}
					
					if(this.vacancyRequestFields.vacancySubstitutor.search) {
						empls = empls.filter(e => e.field_fullname.toLowerCase().includes(this.vacancyRequestFields.vacancySubstitutor.search.toLowerCase()))
					}
					
					empls = empls.filter(e => e.field_is_hidden != 1)
					
					return empls
					
				},
				vacancyRequestFieldCoordinatorEmplsList() {
					let empls = this.empls
					
					if(this.vacancyRequestFields.vacancyCoordinator.departmentFilter && this.currentUser) {
						empls = empls.filter(e => e.field_department_id == this.currentUser.field_department_id)
					}
					
					if(this.vacancyRequestFields.vacancyCoordinator.search) {
						empls = empls.filter(e => e.field_fullname.toLowerCase().includes(this.vacancyRequestFields.vacancyCoordinator.search.toLowerCase()))
					}
					
					empls = empls.filter(e => e.field_is_hidden != 1)
					
					return empls
					
				},
				filteredEmpls() {
					return this.empls.filter(e => e.field_fullname.toLowerCase().includes(this.search.toLowerCase()))
				},
				bTripRequestSendFormIsEnabled() {
					return true
				},
				equipRequestSendFormIsEnabled() {
					return true
				},
				vacancyRequestSendFormIsEnabled() {
					return !!this.vacancyRequestFields.vacancyCoordinator.selectedItem && 
						!!this.vacancyRequestFields.vacancyTypes.selectedItem && 
						!!this.vacancyRequestFields.vacancyDates.selectedItem &&
						!!this.vacancyRequestFields.vacancySubstitutor.selectedItem
				}
			},
			async mounted() {
				try {
					//jQuery('.lk-info__avatar').on('click', function() {
					//	console.log('ava')
					//	$('#lk-avatar').click()
					//})
					
					//jQuery('#lk-avatar').on('change', onAvatarChange)
					
					//jQuery('#uef').on('submit', onUEFSubmit)	
					
					const emplsReq = await fetch('/api/users')
					const emplsData = await emplsReq.json()
					this.empls = emplsData.data.map(e => {
						const userContacts = parseObject(e.field_contacts_data, [])
						e.field_contacts_data = userContacts
						return e
					})
					
					const requestsReq = await fetch('/api/orders/my')
					const requestsData = await requestsReq.json()
					const fRequestsData = requestsData.data.map(e => {
						const dates = parseObject(e.dates, {start: '', end: ''})
						e.dates = {
							start: new Date(dates[0]).toLocaleDateString(),
							end: new Date(dates[1]).toLocaleDateString()
						}
						return e
					})
					this.currentUserRequests = fRequestsData
					
					//this.vacancyRequestFields.vacancyCoordinator.items = data.data
					this.selectedEmpl = this.empls[0]
					this.currentUser = this.empls.find(e => e.id == myId)
				} catch(e) {
					console.log(e)
				}
			}
		})
	}
	
	if($('#lk-empls').length > 0) {
		
		const EMPLS = new Vue({
			el: '#lk-empls',
			name: 'EMPLS',
			directives: {
				onClickAway: onClickAway,
			},
			data() {
				return {
					msg: 'fawfawwfa',
					empls: [],
					selectedEmpl: null,
					search: '',
					isShowVacancyRequestModal: false,
					departmentFilter: {
						items: [
							{value: '', title: 'Все'},
							{value: '1', title: 'Администрация'},
							{
								value: '2', 
								title: 'Управление инженерной геологии и геотехники',
								items: [
									{value: '4', title: 'Отдел геологии'},
									{value: '3', title: 'Отдел обследования зданий и сооружений'}
								]
							},
							{
								value: '7', 
								title: 'Управление геодезических и геоинформационных работ',
								items: [
									{value: '5', title: 'Отдел геоинформационных систем'},
									{value: '6', title: 'Отдел геотехнического мониторинга'}
								]
							}
						],
						selectedItem: '',
						isShowItemsList: false
					},
					
				}
			},
			computed: {
				departmentSelectText() {
					return this.departmentFilter.selectedItem && this.departmentFilter.selectedItem.value ? this.departmentFilter.selectedItem.title : 'Все отделы'
				},
				filteredEmpls() {
					let empls = this.empls
					if(this.departmentFilter.selectedItem && this.departmentFilter.selectedItem.value) {
						empls = empls.filter(e => e.field_department_id == this.departmentFilter.selectedItem.value)
					}
					
					empls = empls.filter(e => e.field_is_hidden != 1)
					
					return empls.filter(e => e.field_fullname.toLowerCase().includes(this.search.toLowerCase()))
				}
			},
			methods: {
				hideDepartmentFilterSelectItemsList() {
					this.departmentFilter.isShowItemsList = false
				},
				selectSetItem(select, value) {
					select.selectedItem = value
					select.isShowItemsList = false
				},
				getBDay() {
					try {
						if(!this.selectedEmpl) return ''
						const date1Arr = this.selectedEmpl.field_bday.split('.')
						const date1S = [date1Arr[1].trim(), date1Arr[0].trim(), date1Arr[2].trim()].join('/')
						const raw = new Date(date1S)
						console.log({raw, date1S})
						return raw.toLocaleString('default', { month: 'long', day: 'numeric' })
					} catch(error) {
						console.log(error)
						return ''
					}
				},
				calcExp() {
					if(!this.selectedEmpl) return ''
					const exp = calcDate(this.selectedEmpl.field_working_at, Date.now())
					//console.log(exp)
					const yTexts = ['год', 'года', 'лет']
					let yText = yTexts[0]
					if(exp.years_passed > 1 && exp.years_passed < 5) yText = yTexts[1]
					if(exp.years_passed > 4) yText = yTexts[2]
					
					const mTexts = ['месяц', 'месяца', 'месяцев']
					let mText = mTexts[0]
					if(exp.months_passed > 1 && exp.months_passed < 5) mText = mTexts[1]
					if(exp.months_passed > 4) mText = mTexts[2]
					
					const dTexts = ['день', 'дня', 'дней']
					let dText = dTexts[0]
			
					if(exp.days_passed / 10 >= 2) {
						if(exp.days_passed % 10 == 0) dText = dTexts[2]
						if(exp.days_passed % 10 > 1 && exp.days_passed % 10 < 5) dText = dTexts[1]
						if(exp.days_passed % 10 > 4) dText = dTexts[2]
					} else {
						if(exp.days_passed > 1 && exp.days_passed < 5) dText = dTexts[1]
						if(exp.days_passed > 4) dText = dTexts[2]
					}
					
					return `${exp.years_passed ? exp.years_passed + ' ' + yText : ''} ${exp.months_passed ? exp.months_passed + ' ' + mText : ''} ${exp.days_passed ? exp.days_passed + ' ' + dText : ''}`
				}
			}, 
			async mounted() {
				try {
					const emplsReq = await fetch('/api/users')
					const emplsData = await emplsReq.json()
					this.empls = emplsData.data.map(e => {
						const userContacts = parseObject(e.field_contacts_data, [])
						e.field_contacts_data = userContacts
						return e
					})
					if(!isMobile) {
						this.selectedEmpl = this.empls[0]
					}
				} catch(e) {
					console.log(e)
				}
			}
		})
	}
	
	
	
})

function calcDate(date1, date2) {
    /*
    * calcDate() : Calculates the difference between two dates
    * @date1 : "First Date in the format MM-DD-YYYY"
    * @date2 : "Second Date in the format MM-DD-YYYY"
    * return : Array
    */

    //new date instance
	const date1Arr = date1.split('.')
	const date1S = [date1Arr[1], date1Arr[0], date1Arr[2]].join('/')
	
    const dt_date1 = new Date(date1S);
    const dt_date2 = new Date(date2);
	
	//console.log({date1, date1S, dt_date1, date2, dt_date2})

    //Get the Timestamp
    const date1_time_stamp = dt_date1.getTime();
    const date2_time_stamp = dt_date2.getTime();

    let calc;

    //Check which timestamp is greater
    if (date1_time_stamp > date2_time_stamp) {
        calc = new Date(date1_time_stamp - date2_time_stamp);
    } else {
        calc = new Date(date2_time_stamp - date1_time_stamp);
    }
    //Retrieve the date, month and year
    const calcFormatTmp = calc.getDate() + '-' + (calc.getMonth() + 1) + '-' + calc.getFullYear();
    //Convert to an array and store
    const calcFormat = calcFormatTmp.split("-");
    //Subtract each member of our array from the default date
    const days_passed = Number(Math.abs(calcFormat[0]) - 1);
    const months_passed = Number(Math.abs(calcFormat[1]) - 1);
    const years_passed = Number(Math.abs(calcFormat[2]) - 1970);

    //Set up custom text
    const yrsTxt = ["year", "years"];
    const mnthsTxt = ["month", "months"];
    const daysTxt = ["day", "days"];

    //Convert to days and sum together
    const total_days = (years_passed * 365) + (months_passed * 30.417) + days_passed;
    const total_secs = total_days * 24 * 60 * 60;
    const total_mins = total_days * 24 * 60;
    const total_hours = total_days * 24;
    const total_weeks = ( total_days >= 7 ) ? total_days / 7 : 0;

    //display result with custom text
    const result = ((years_passed == 1) ? years_passed + ' ' + yrsTxt[0] + ' ' : (years_passed > 1) ?
        years_passed + ' ' + yrsTxt[1] + ' ' : '') +
        ((months_passed == 1) ? months_passed + ' ' + mnthsTxt[0] : (months_passed > 1) ?
            months_passed + ' ' + mnthsTxt[1] + ' ' : '') +
        ((days_passed == 1) ? days_passed + ' ' + daysTxt[0] : (days_passed > 1) ?
            days_passed + ' ' + daysTxt[1] : '');

    //return the result
    return {
        "total_days": Math.round(total_days),
        "total_weeks": Math.round(total_weeks),
        "total_hours" : Math.round(total_hours),
        "total_minutes" : Math.round(total_mins),
        "total_seconds": Math.round(total_secs),
		"years_passed": years_passed,
		"months_passed": months_passed,
		"days_passed": days_passed,
        "result": result.trim()
    }

}

function debounce(fn, wait){
    let timer;
   return function(...args){
     if(timer) {
        clearTimeout(timer); // clear any pre-existing timer
     }
     const context = this; // get the current context
     timer = setTimeout(()=>{
        fn.apply(context, args); // call the function if time expires
     }, wait);
   }
}

function throttle(func, ms) {
	let isThrottled = false,
	savedArgs,
	savedThis;
	function wrapper() {
		if (isThrottled) { // (2)
		  savedArgs = arguments;
		  savedThis = this;
		  return;
		}
		func.apply(this, arguments); // (1)
		isThrottled = true;
		setTimeout(function() {
			isThrottled = false; // (3)
			if (savedArgs) {
				wrapper.apply(savedThis, savedArgs);
				savedArgs = savedThis = null;
			}
		}, ms);
	}
	return wrapper;
}

function parseObject(str, d = {}) {
	try {
		//console.log({str})
		if(str) {
			return JSON.parse(str)
		}
		return d
	} catch(e) {
		console.log(e)
		return d
	}
}

