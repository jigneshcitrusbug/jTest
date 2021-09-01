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

$(document).ready(function () {
  /*$("#SubscribeNewsletterModal").modal("show");*/
});
