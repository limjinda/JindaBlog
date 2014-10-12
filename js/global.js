$(document).ready(function() {
	var bd = $('body');
	var im = $('.icon-menu');
	var ls = $('.home-left-block');
	im.on('click', function() {
		$(this).toggleClass('active');
		ls.toggleClass('show');
		bd.toggleClass('fixed')
	});
});