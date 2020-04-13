// Homepage Swiper
if ( document.body.classList.contains('homepage-base') ) {
	var swiper_home = new Swiper('.homepage-base .swiper-container', {
		slidesPerGroup: 1,
		autoplay: true,
		speed: 800,
		loop: true,
		lazy: true,
		grabCursor: true,
		updateOnWindowResize: true,
		loopFillGroupWithBlank: true,
		centeredSlides: true,
		keyboard: {
			enabled: true,
			onlyInViewport: false,
		},
		pagination: false,
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
		initialSlide: 2,
		slidesPerView: 1.5,
		spaceBetween: 16,
		breakpoints: {
            801: {
                slidesPerView: 2.6,
			},
			1400: {
                slidesPerView: 3.5,
			}
			,
			1600: {
                slidesPerView: 4,
            }
		}
	});
}
// News Swiper
if ( document.body.classList.contains('home-news') ) {
	var swiper_news = new Swiper('.home-news .swiper-container', {
		effect: "coverflow",
		coverflowEffect: {
			rotate: 7, // Slide rotate in degrees
			stretch: 0, // Stretch space between slides (in px)
			depth: 7, // Depth offset in px (slides translate in Z axis)
			modifier: 1, // Effect multipler
			slideShadows: true // Enables slides shadows
		},
		slidesPerView: 1,
		spaceBetween: 0,
		speed: 800,
		loop: true,
		lazy: true,
		parallax: true,
		updateOnWindowResize: true,
		centeredSlides: true,
		grabCursor: true,
		zoom: {
			maxRatio: 5,
		},
		keyboard: {
			enabled: true,
			onlyInViewport: false,
		},
		mousewheel: {
			invert: true,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true
		},
		navigation: {
			nextEl: ".swiper-button-next",
			prevEl: ".swiper-button-prev"
		},
		breakpoints: {
			801: {
				slidesPerView: 1.2,
				spaceBetween: -100,
				keyboard: false,
				mousewheel: false,
			},
		}
	});
}

var rellax = new Rellax('.rellax', {
    speed: -2,
    center: false,
    wrapper: null,
    round: true,
    vertical: true,
    horizontal: false
});
