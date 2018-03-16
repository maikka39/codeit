//Show/Hide scrolltop
$(window).scroll(function() {
  if ($(this).scrollTop() > 200) {
    fadeElement(".scrolltotop", "in", 1, "block")
  } else {
    fadeElement(".scrolltotop", "out", 1, "block")
  }
});
// $(window).scroll(function() {
//   const $scrolltotop = $('.scrolltotop');
//
//   if ($(this).scrollTop()>200)
//     {
//       $scrolltotop.fadeIn();
//     }
//     else
//     {
//       $scrolltotop.fadeOut();
//     }
// });

// Script for smooth scroll
$(document).on('click', 'a[href^="#"]', function(e) {
    // Target element id
    var id = $(this).attr('href');

    // Target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // Prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // Top position relative to the document
    var pos = $id.offset().top;
    // Add an offset
    var pos = pos - 100;

    // animated top scrolling
    $('body, html').animate({scrollTop: pos});
});

// Activate NiceScroll
$("body").niceScroll({
  cursorcolor:"rgba(45, 45, 45, 0.85)",
  cursorborder: "none",
  cursorwidth:"0.4vw",
  zindex: "998"
});
$(".scroll").niceScroll({
  cursorcolor:"rgba(45, 45, 45, 0.85)",
  cursorborder: "none",
  cursorwidth:"0.4vw",
  zindex: "999",
  autohidemode: false
});

$.fn.extend({
    disableSelection: function() {
        this.each(function() {
            if (typeof this.onselectstart != 'undefined') {
                this.onselectstart = function() { return false; };
            } else if (typeof this.style.MozUserSelect != 'undefined') {
                this.style.MozUserSelect = 'none';
            } else {
                this.onmousedown = function() { return false; };
            }
        });
    }
});

// Add disable selection function
$(document).ready(function() {
    $('nav').disableSelection();
    $('header').disableSelection();
    $('footer').disableSelection();
});




function acceptCookies() {
  console.log("HI");
  setCookie("acceptCookies", "true", 365);
  $(".cookie-bar").css("display", "none");
}
