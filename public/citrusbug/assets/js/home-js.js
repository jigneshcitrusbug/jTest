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
});

var a = 0;
$(window).scroll(function () {
  var oTop = $("#counter-number-root").offset().top - window.innerHeight;
  if (a == 0 && $(window).scrollTop() > oTop) {
    $(".counter-value").each(function () {
      var $this = $(this),
        countTo = $this.attr("data-count");
      $({
        countNum: $this.text(),
      }).animate(
        {
          countNum: countTo,
        },

        {
          duration: 2500,
          easing: "swing",
          step: function () {
            $this.text(Math.floor(this.countNum));
          },
          complete: function () {
            $this.text(this.countNum);
          },
        }
      );
    });
    a = 1;
  }
});

$(document).ready(function () {
  $("#trusted-slider-owl01").owlCarousel({
    loop: true,
    nav: false,
    dots: false,
    margin: 20,
    autoplay: true,
    slideSpeed: 300,
    smartSpeed: 1000,
    slideBy: 1,
    responsive: {
      0: {
        items: 2,
        margin: 15,
      },
      600: {
        items: 4,
      },
      1200: {
        items: 5,
      },
      1600: {
        items: 6,
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
});
