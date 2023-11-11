document.addEventListener('DOMContentLoaded', init)

function init() {
	
	$('[data-modal-trigger]').on('click', function() {
		const modal = $(this).attr('data-modal-trigger')
		$('[data-modal="' + modal + '"]').fadeIn(200)
	})
	
	$('.modal__closer').on('click', function() {
		$(this).closest('[data-modal]').fadeOut(200)
	})
	
	const searchParams = new URLSearchParams(location.search);
	
	if(searchParams.has('login')) {
		$('a[data-modal-trigger="login"]')[0].click()
	}
	
	$('.page').append('<div id="form-notification"><div class="form-notification__text"></div></div>')
	
	const showNotification = bool => {
		let text = bool ? 'Ваша заявка отправлена!' : 'Ошибка!',
			classify = bool ? 'done' : 'error'
		$('#form-notification').addClass('active').attr('data-class', classify)
		$('#form-notification .form-notification__text').text(text)
		setTimeout(function() {
			$('#form-notification').removeClass('active')
		}, 4000)
	}
	
	window.noti = (isSuccess, text) => {
		//let text = isSuccess ? 'Ваша заявка отправлена!' : 'Ошибка!',
		const notiClass = isSuccess ? 'done' : 'error'
		$('#form-notification').addClass('active').attr('data-class', notiClass)
		$('#form-notification .form-notification__text').text(text)
		setTimeout(function() {
			$('#form-notification').removeClass('active')
		}, 4000)
	}
		
	$('.superform').on('submit', function(e) {
		e.preventDefault();
		let vm = this
		
		$(this).find('.mbtn').attr('disabled', true)
		let serializedData = $(this).serialize();
		let action = $(this).attr('data-action');
		
		$.post('/form/' + action, serializedData)
			.done(function() { 
				noti(true, 'Ок') 
				$(vm).trigger('reset')
			})
			.fail(function() { 
				noti(false, 'Ошибка')
			})
		
		return false
	})
	
	$('.js-test-auth').on('click', function() {
		const login = $(this).attr('data-login'),
			  password = $(this).attr('data-password')
		$(this).closest('.js-auth-form').find('input[name="login"]').val(login)
		$(this).closest('.js-auth-form').find('input[name="password"]').val(password)
	})
	
	$('.js-auth-form').on('submit', async function(e) {
		try {
			e.preventDefault()
			const action = $(this).attr('action'),
				  data = $(this).serialize()
			
			const res = await fetch(action, {
				method: "POST", 
				body: data,
				headers: {
				  //'Content-Type': 'application/json'
				  'Content-Type': 'application/x-www-form-urlencoded',
				},
			})
			if(res.ok) {
				//location.reload()
				//location.href = location.origin + '/' + r.url
				
				const {url} = await res.json()
				location.href = location.origin + url
			} else {
				noti(false, 'Данные введены неверно')
			}
		} catch(e) {
			console.log(e)
			noti(false, 'Ошибка')
		}
	})
	
	$('.js-reg-form').on('submit', async function(e) {
		try {
			e.preventDefault()
			const action = $(this).attr('action'),
				  data = $(this).serialize()
			
			const res = await fetch(action, {
				method: "POST", 
				body: data,
				headers: {
				  //'Content-Type': 'application/json'
				  	'Content-Type': 'application/x-www-form-urlencoded',
					'Accept': 'application/json'
				},
			})
			//const d = await res.json()
			//console.log(d)
			if(res.ok) {
				//location.reload()
				//location.href = location.origin + '/' + r.url
				location.href = location.origin + '/lk/'
			} else {
				noti(false, 'Данные введены неверно')
			}
		} catch(e) {
			console.log(e)
			noti(false, 'Ошибка')
		}
	})
}
