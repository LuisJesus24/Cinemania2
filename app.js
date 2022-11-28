var swiper = new Swiper('.swiper-container', {
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev'
	},
	slidesPerView: 3,
	spaceBetween: 20,
	// init: false,
	pagination: {
	  el: '.swiper-pagination',
	  clickable: true,
	},

  
	breakpoints: {
	  620: {
		slidesPerView: 2,
		spaceBetween: 15,
	  },
	  680: {
		slidesPerView: 3,
		spaceBetween: 150,
	  },
	  920: {
		slidesPerView: 4,
		spaceBetween: 150,
	  },
	  1240: {
		slidesPerView: 5,
		spaceBetween: 15,
	  },
	} 
    });


