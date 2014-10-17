$(document).ready(function() {
	var wd = $(window);
	var bd = $('body');
	var im = $('.icon-menu');
	var ls = $('.home-left-block');
	var rst;
	im.on('click', function() {
		$(this).toggleClass('active');
		ls.toggleClass('show');
		bd.toggleClass('fixed')
	});
	function rep(){
		bd.fadeIn();
	};
	wd.resize(function(){
		bd.css('display', 'none');
		clearTimeout(rst);
		rst = setTimeout(rep, 200);
	});
});