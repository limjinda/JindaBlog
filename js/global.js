jQuery(document).ready(function() {

	function rep() {
		bd.fadeIn();
	};
	var wd = jQuery(window);
	var bd = jQuery('body');
	var im = jQuery('.icon-menu');
	var ls = jQuery('.home-left-block');
	var amb = jQuery('#wpadminbar');
	var rst;
	im.on('click', function() {
		if (jQuery(this).find('.icon').hasClass('uk-icon-bars')) {
			jQuery(this).find('.icon').removeClass('uk-icon-bars');
			jQuery(this).find('.icon').addClass('uk-icon-close');
		} else {
			jQuery(this).find('.icon').removeClass('uk-icon-close');
			jQuery(this).find('.icon').addClass('uk-icon-bars');
		};
		jQuery(this).toggleClass('active');
		ls.toggleClass('show');
		bd.toggleClass('fixed');
	});

	if (jQuery('table').length > 0) {
		jQuery('table').addClass('uk-table uk-table-striped uk-table-condensed');
	};
	if (jQuery('dl').length > 0) {
		jQuery('dl').addClass('uk-description-list-line');
	};
	if ( jQuery('#commentform').length > 0 ) {
		jQuery('#commentform').addClass('uk-form');
		jQuery('.comment-author').find('img').addClass('uk-border-circle');
	};

	if (jQuery.browser.desktop) {
		wd.resize(function() {
			bd.css('display', 'none');
			clearTimeout(rst);
			rst = setTimeout(rep, 200);
		});
	}

});