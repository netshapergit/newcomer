new Swiper('.partners-slider', {
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	},

	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},

	breakpoints: {
		320: {
			spaceBetween: 20,
			slidesPerView: 2,
		},

		450: {
			spaceBetween: 20,
			slidesPerView: 4,
		},

		1024: {
			spaceBetween: 150,
			slidesPerView: 4,
		}
	},
	slideToClickedSlide: true,
	slidesPerView: 1,
	loopedSlides: 3,
	spaceBetween: 20,
	preloadImages: false,

	lazy: {
		loadOnTransitionStart: false,
		loadPrevNext: false,
	},

	watchSlidesProgress: true,
	watchSliedesVisibility: true,

});


new Swiper('.team-slider', {
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	},

	pagination: {
		el: '.swiper-pagination',
		clickable: true,
	},

	breakpoints: {
		320: {
			spaceBetween: 20,
			slidesPerView: 1,
		},

		375: {
			slidesPerView: 2,
		},

		551: {
			slidesPerView: 3,
		},

		1024: {
			spaceBetween: 24,
			slidesPerView: 4,
		}
	},
	slideToClickedSlide: true,
	slidesPerView: 1,
	loopedSlides: 3,
	spaceBetween: 20,
	preloadImages: false,

	lazy: {
		loadOnTransitionStart: false,
		loadPrevNext: false,
	},

	watchSlidesProgress: true,
	watchSliedesVisibility: true,

});