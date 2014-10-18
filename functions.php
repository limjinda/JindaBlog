<?php 


if ( ! function_exists( 'jindaBlog_setup' ) ) :
function jindaBlog_setup() {
	
	load_theme_textdomain( 'jindaBlog', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 768, 475, false );
	add_image_size( 'jindaBlogCover', 768, 475, array( 'center', 'center' ) );
	// add_image_size( 'jindaBlogList', 270, 180, array( 'center', 'center' ) );

	register_nav_menus( array(
		'primary'   => __( 'Primary left sidebar', 'jindaBlog' ),
		'secondary' => __( 'Secondary left sidebar', 'jindaBlog' ),
	));

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	));

	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote', 'gallery',
	));

}
endif;
add_action( 'after_setup_theme', 'jindaBlog_setup' );

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return ' ';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>