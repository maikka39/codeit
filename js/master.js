// Create function for fading in/out elements
function fadeElement(element, state, fadeSpeed, display) {
  element = $(element);
  if (element && state && fadeSpeed) {
    if (!display) {
      display = "block";
    }
    if (state == "in") {
      element.css("display", display);
      element.animate({'opacity':'1'}, fadeSpeed);
    } else if (state == "out") {
      element.animate({'opacity':'0'}, fadeSpeed);
      element.css("display", "none");
    }
  } else {
    console.log("Provide all arguments for fadeElement");
  }
}

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
  zindex: "999"
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
