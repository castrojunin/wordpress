$(document).on('ready', function () {
	

	////// START PLUGINS ///////
	$('body').niceScroll({
		cursorcolor			: '#000',
		cursorwidth			: 1,
		cursoropacitymin	: 0,
		cursoropacitymax	: 0,
		zindex				: 998,
		scrollspeed			: 100,
		mousescrollstep 	: 10,
	});


});

$(window).on('load', function() {

	$('body').removeClass('loading');

});
$(window).on('resize', function() {

	
});
$(window).on('beforeunload', function() {
	$('body').addClass('loading');
});


