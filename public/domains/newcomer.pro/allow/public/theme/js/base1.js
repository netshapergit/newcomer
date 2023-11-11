"use strict"

const isMobile = {
	Android: function () {
		return navigator.userAgent.match(/Android/i);
	},
	BlackBerry: function () {
		return navigator.userAgent.match(/BlackBerry/i);
	},
	iOS: function () {
		return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	},
	Opera: function () {
		return navigator.userAgent.match(/Opera Mini/i);
	},
	Windows: function () {
		return navigator.userAgent.match(/IEMobile/i);
	},
	any: function () {
		return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	}
};

if (isMobile.any()) {
	document.body.classList.add('touch');

	let siteListArrows = document.querySelectorAll('.site-list__arrow');
	if (siteListArrows.length > 0) {
		for (let index = 0; index < siteListArrows.length; index++) {
			const siteListArrow = siteListArrows[index];
			siteListArrow.addEventListener("click", function (e) {
				siteListArrow.parentElement.classList.toggle('site-list__item--active');
			});
		}
	}

} else {
	document.body.classList.add('pc');
}

const iconNav = document.querySelector('.main-nav__icon');
if (iconNav) {
	const wrapperNav = document.querySelector('.main-nav__wrapper');
	iconNav.addEventListener("click", function (e) {
		document.body.classList.toggle('lock');
		iconNav.classList.toggle('active');
		wrapperNav.classList.toggle('active');
	});

};

class Modal {
	constructor(options) {
		let defaultOptions = {
			isOpen: () => { },
			isClose: () => { },
		}
		this.options = Object.assign(defaultOptions, options);
		this.modal = document.querySelector('.modal');
		this.speed = false;
		this.animation = false;
		this.isOpen = false;
		this.modalContainer = false;
		this.previousActiveElement = false;
		this.fixBlocks = document.querySelectorAll('.fix-block');
		this.focusElements = [
			'a[href]',
			'input',
			'button',
			'select',
			'textarea',
			'[tabindex]'
		];
		this.events();
	}

	events() {
		if (this.modal) {
			document.addEventListener('click', function (e) {
				const clickedElement = e.target.closest('[data-path]');
				if (clickedElement) {
					let target = clickedElement.dataset.path;
					let animation = clickedElement.dataset.animation;
					let speed = clickedElement.dataset.speed;
					this.animation = animation ? animation : 'fade';
					this.speed = speed ? parseInt(speed) : 300;
					this.modalContainer = document.querySelector(`[data-target="${target}"]`);
					this.open();
					return;
				}

				if (e.target.closest('.modal-close')) {
					this.close();
					return;
				}
			}.bind(this));

			window.addEventListener('keydown', function (e) {
				if (e.keyCode == 27) {
					if (this.isOpen) {
						this.close();
					}
				}

				if (e.keyCode == 9 && this.isOpen) {
					this.focusCatch(e);
					return;
				}

			}.bind(this));

			this.modal.addEventListener('click', function (e) {
				if (!e.target.classList.contains('modal__container') && !e.target.closest('.modal__container') && this.isOpen) {
					this.close();
				}
			}.bind(this));
		}
	}

	open() {
		this.previousActiveElement = document.activeElement;

		this.modal.style.setProperty('--transition-time', `${this.speed / 1000}s`);
		this.modal.classList.add('is-open');
		this.disableScroll();

		this.modalContainer.classList.add('modal-open');
		this.modalContainer.classList.add(this.animation);

		setTimeout(() => {
			this.options.isOpen(this);
			this.modalContainer.classList.add('animate-open');
			this.isOpen = true;
			this.focusTrap();
		}, this.speed);
	}

	close() {
		if (this.modalContainer) {
			this.modalContainer.classList.remove('animate-open');
			this.modalContainer.classList.remove(this.animation);
			this.modal.classList.remove('is-open');
			this.modalContainer.classList.remove('modal-open');

			this.enableScroll();
			this.options.isClose(this);
			this.isOpen = false;
			this.focusTrap();
		}
	}

	focusCatch(e) {
		const focusable = this.modalContainer.querySelectorAll(this.focusElements);
		const focusArray = Array.prototype.slice.call(focusable);
		const focusedIndex = focusArray.indexOf(document.activeElement);

		if (e.shiftKey && focusedIndex === 0) {
			focusArray[focusArray.length - 1].focus();
			e.preventDefault();
		}

		if (!e.shiftKey && focusedIndex === focusArray.length - 1) {
			focusArray[0].focus();
			e.preventDefault();
		}
	}

	focusTrap() {
		const focusable = this.modalContainer.querySelectorAll(this.focusElements);
		if (this.isOpen) {
			focusable[0].focus();
		} else {
			this.previousActiveElement.focus();
		}
	}

	disableScroll() {
		let pagePosition = window.scrollY;
		this.lockPadding();
		document.body.classList.add('disable-scroll');
		document.body.dataset.position = pagePosition;
		document.body.style.top = -pagePosition + 'px';
	}

	enableScroll() {
		let pagePosition = parseInt(document.body.dataset.position, 10);
		this.unlockPadding();
		document.body.style.top = 'auto';
		document.body.classList.remove('disable-scroll');
		window.scroll({ top: pagePosition, left: 0 });
		document.body.removeAttribute('data-position');
	}

	lockPadding() {
		let paddingOffset = window.innerWidth - document.body.offsetWidth + 'px';
		this.fixBlocks.forEach((el) => {
			el.style.paddingRight = paddingOffset;
		});
		document.body.style.paddingRight = paddingOffset;
	}

	unlockPadding() {
		this.fixBlocks.forEach((el) => {
			el.style.paddingRight = '0px';
		});
		document.body.style.paddingRight = '0px';
	}
}

const modal = new Modal({
	isOpen: (modal) => {
		console.log(modal);
		console.log('opened');
	},
	isClose: () => {
		console.log('closed');
	},
});



/*
let selector = document.querySelectorAll('input[type="tel"]');
let im = new Inputmask('+7 (999) 999-99-99');
im.mask(selector);

let selector2 = document.querySelector('input[type="tel"]');

selector2.addEventListener('input', function () {
	console.log(selector2.value)


	const re = /^\d*(\.\d+)?$/

	console.log(selector2.value.match(/[0-9]/g).length)


	console.log(selector2.value.replace(/[0-9]/g, "0"));

});


let validateForms = function (selector, rules, successModal, yaGoal) {
	new window.JustValidate(selector, {
		rules: rules,
		submitHandler: function (form) {
			let formData = new FormData(form);

			let xhr = new XMLHttpRequest();

			xhr.onreadystatechange = function () {
				if (xhr.readyState === 4) {
					if (xhr.status === 200) {
						console.log('Отправлено');
					}
				}
			}

			xhr.open('POST', 'mail.php', true);
			xhr.send(formData);
			alert('Заявка успешно отправлена. Мы свяжемся с вами в ближайшее время.')
			form.reset();

			fileInput.closest('label').querySelector('span').textContent = 'Прикрепить файл';
		}
	});
}

validateForms('.form', { email: { required: true, email: true }, tel: { required: true } }, '.thanks-popup', 'send goal');
*/