$(document).ready(function() {

	function rep() {
		bd.fadeIn();
	};
	var wd = $(window);
	var bd = $('body');
	var im = $('.icon-menu');
	var ls = $('.home-left-block');
	var amb = $('#wpadminbar');
	var rst;
	im.on('click', function() {
		if ($(this).find('.icon').hasClass('uk-icon-bars')) {
			$(this).find('.icon').removeClass('uk-icon-bars');
			$(this).find('.icon').addClass('uk-icon-close');
		} else {
			$(this).find('.icon').removeClass('uk-icon-close');
			$(this).find('.icon').addClass('uk-icon-bars');
		};
		$(this).toggleClass('active');
		ls.toggleClass('show');
		bd.toggleClass('fixed');
	});

	if ($('table').length > 0) {
		$('table').addClass('uk-table uk-table-striped uk-table-condensed');
	};
	if ($('dl').length > 0) {
		$('dl').addClass('uk-description-list-line');
	};

	if ($.browser.desktop) {
		wd.resize(function() {
			bd.css('display', 'none');
			clearTimeout(rst);
			rst = setTimeout(rep, 200);
		});
	}

});