
// Script for dragging
// Huge thanks to grimski and Shikkediel for a big part of this code!
// https://css-tricks.com/forums/topic/horizontal-drag-scrolling/
$(document).ready(function(){
	$(".pam-item").height($(".pros").outerHeight(true));
	var figure = $('.pam-items .pam-item'),
	pamItem = $(".pam-item:first"),
	figure_width = pamItem.outerWidth(true),
	num_figures = figure.length,
	num_row_figures = Math.ceil(num_figures),
	row_width = figure_width*num_row_figures;

	figure.parent().css('width', row_width).drag();
	setDimensions();

	$(window).resize(setDimensions);

function setDimensions() {

	var overflow = Math.max(0, row_width-$('#pam-container-container').width()),
	parent_width = row_width+overflow;
	$('#pam-container').css({width: parent_width, left: -overflow});
	figure.parent().css('left', overflow);
}
});

(function($) {$.fn.drag = function() {

	var object = this, limit = this.parent(), now, swipe,
	press = 'mousedown touchstart',
	move = 'mousemove touchmove',
	release = 'mouseup touchend';

	if (window.requestAnimationFrame) var neoteric = true;

	this.on(press, function(e) {

		if (e.type == 'mousedown' && e.which != 1) return;

		var margin = limit.width()-object.outerWidth(),
		old = object.position().left,
		touch = e.originalEvent.touches,
		start = touch ? touch[0].pageX : e.pageX;

		$(window).on(move, function(e) {

		var contact = e.originalEvent.touches,
		end = contact ? contact[0].pageX : e.pageX;
		now = Math.max(0, Math.min(old+end-start, margin));

		if (Math.abs(end-start) > 30) swipe = true;

		if (neoteric) requestAnimationFrame(setElement);
		else setElement();
		})
		.one(release, function(e) {
		e.preventDefault();
		swipe = false;
		$(this).off(move).off(release);
		});

		e.preventDefault();
	})
	.find('a').on(press, function() {

		var destination = $(this).attr('href');

		$(this).one(release, function() {
		if (destination && !swipe) window.location = destination;
		$(this).off(release);
		});

	}).click(function() {return false});

	$('body').mouseleave(function() {
	swipe = false;
	$(window).off(move).off(release);
	});

	return this;

function setElement() {

	object.css('left', now);
}
};
}(jQuery));
