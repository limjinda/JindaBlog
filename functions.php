<?php 


if ( ! function_exists( 'jindaBlog_setup' ) ) :
function jindaBlog_setup() {
	
	load_theme_textdomain( 'jindaBlog', get_template_directory() . '/languages' );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 672, 372, true );
	// add_image_size( 'twentyfourteen-full-width', 1038, 576, true );

	register_nav_menus( array(
		'primary'   => __( 'Primary left sidebar', 'jindaBlog' ),
		'secondary' => __( 'Secondary left sidebar', 'jindaBlog' ),
	) );

	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'post-formats', array(
		'image', 'video', 'quote', 'gallery',
	) );

}
endif;
add_action( 'after_setup_theme', 'jindaBlog_setup' );

?>