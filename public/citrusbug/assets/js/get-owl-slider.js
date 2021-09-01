$(document).ready(function () {
  $("#dev-slider-owl01").owlCarousel({
    loop: true,
    nav: true,
    navText: [
      '<span class="span-roundcircle left-roundcircle"><span class="material-icons-outlined">navigate_before</span></span>',
      '<span class="span-roundcircle right-roundcircle"><span class="material-icons-outlined">navigate_next</span></span>',
    ],
    dots: true,
    dotsEach: true,
    stagePadding: 0,
    margin: 20,
    autoplay: true,
    slideSpeed: 300,
    smartSpeed: 1000,
    slideBy: 1,
    responsive: {
      0: {
        items: 1,
        margin: 15,
        nav: false,
        slideSpeed: 1500,
      },
      600: {
        items: 2,
        nav: false,
      },
      1200: {
        items: 4,
      },
      1600: {
        items: 4,
      },
    },
  });

  $("#our-clients-slider-owl01").owlCarousel({
    loop: true,
    nav: true,
    navText: [
      '<span class="span-roundcircle left-roundcircle"><span class="material-icons-outlined">navigate_before</span></span>',
      '<span class="span-roundcircle right-roundcircle"><span class="material-icons-outlined">navigate_next</span></span>',
    ],
    dots: true,
    dotsEach: true,
    stagePadding: 0,
    autoplayHoverPause: true,
    margin: 0,
    autoplay: true,
    slideSpeed: 3000,
    smartSpeed: 2000,
    slideBy: 1,
    responsive: {
      0: {
        items: 1,
        margin: 15,
        nav: false,
        autoplayHoverPause: false,
        autoplay: false,
      },
      1200: {
        items: 1,
        margin: 0,
      },
    },
  });
});
