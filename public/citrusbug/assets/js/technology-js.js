$(window).on("scroll touchmove", function () {
  var $window = $(window),
    $headerLeftBody = $(".header-div"),
    $headerRightBody = $(".header-right-side-inner"),
    $panel = $(".section");

  var scroll = $window.scrollTop() + $window.height() / 8;
  // var scroll = $window.scrollTop() + ($window.height() / 3);

  $panel.each(function () {
    var $this = $(this);
    if (
      $this.position().top <= scroll &&
      $this.position().top + $this.height() > scroll
    ) {
      $headerLeftBody.removeClass(function (index, css) {
        return (css.match(/(^|\s)bg-\S+/g) || []).join(" ");
        // return (css.match(/(^|\s)color-\S+/g) || []).join(" ");
      });
      $headerLeftBody.addClass($(this).data("color"));
      // $headerLeftBody.addClass('color-' + $(this).data('color'));

      $headerRightBody.removeClass(function (index, css) {
        return (css.match(/(^|\s)bg-\S+/g) || []).join(" ");
        // return (css.match(/(^|\s)color-\S+/g) || []).join(" ");
      });
      $headerRightBody.addClass($(this).data("color"));
    }
  });

  $(".contact-dev-section").each(function () {
    var $this = $(this);
    if (
      $this.position().top <= $window.scrollTop() + $window.height() / 3 &&
      $this.position().top + $this.height() >
        $window.scrollTop() + $window.height() / 3
    ) {
      $headerLeftBody.removeClass(function (index, css) {
        return (css.match(/(^|\s)bg-\S+/g) || []).join(" ");
      });
      $headerLeftBody.addClass($(this).data("color"));
      $headerRightBody.removeClass(function (index, css) {
        return (css.match(/(^|\s)bg-\S+/g) || []).join(" ");
      });
      $headerRightBody.addClass($(this).data("color"));
    }
  });

  if ($(document).scrollTop() >= $(".first-section").position().top) {
    $("#offer-sticky-top").addClass("active");
  } else {
    $("#offer-sticky-top").removeClass("active");
  }
});

$("#our-work-slider-owl01").owlCarousel({
  loop: true,
  nav: true,
  navText: [
    '<span class="span-roundcircle left-roundcircle"><span class="material-icons-outlined">navigate_before</span></span>',
    '<span class="span-roundcircle right-roundcircle"><span class="material-icons-outlined">navigate_next</span></span>',
  ],
  dots: false,
  stagePadding: 0,
  autoplayHoverPause: true,
  margin: 0,
  autoplay: true,
  slideSpeed: 1200,
  smartSpeed: 1200,
  slideBy: 1,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1200: {
      items: 3,
    },
    1600: {
      items: 3,
    },
  },
});

var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
);

var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});
