jQuery(window).ready(function($) {

	project = $('.project').css('opacity', '0');
	overlay = $('.overlay').css('opacity', '0');

	delay = 500;
	// Fade in each project one after the other
	project.each(function(){
		$(this).delay(delay).animate({
			opacity: '1'
		}, 'slow');
		delay += 300;
	});

	// Portfolio projects overlay
	project.hover(function(){
		$(this).find(overlay).stop().animate({
			opacity: '1'
		}, 200);
	}, function(){
		$(this).find(overlay).stop().animate({
			opacity: '0'
		}, 200);
	});

});
