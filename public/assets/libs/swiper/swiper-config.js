const stylish = new Swiper('.stylish .swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },

  on:
  {
    slideChange: function(swiper)
    {

      let bg = swiper.slides[ swiper.activeIndex ].dataset.bg
      let ancestor = swiper.slides[ swiper.activeIndex ].closest('.stylish')

      ancestor.style.backgroundImage = `url(${bg})`
    }
  }
});

