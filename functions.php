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

	require_once (dirname(__FILE__) . '/jinda-config.php');

}
endif;
add_action( 'after_setup_theme', 'jindaBlog_setup' );

function jinda_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.min.js');
	wp_enqueue_script('jquery');
	
	wp_enqueue_style('uikit', get_stylesheet_directory_uri() . '/bower_components/uikit/css/uikit.almost-flat.min.css');
	wp_enqueue_style('jindablog-core', get_stylesheet_uri() );

	wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/bower_components/modernizr/modernizr.js');
	wp_enqueue_script('trmix', get_stylesheet_directory_uri() . '/bower_components/trmix/dist/trmix.min.js', array(), '1.0.0', ture);
	wp_enqueue_script('uikit', get_stylesheet_directory_uri() . '/bower_components/uikit/js/uikit.min.js', array(), '1.0.0', ture);
	wp_enqueue_script('jquery-browser', get_stylesheet_directory_uri() . '/bower_components/jquery.browser/dist/jquery.browser.min.js', array(), '1.0.0', ture);
	wp_enqueue_script('jindablog-core-js', get_stylesheet_directory_uri() . '/js/global.js', array(), '1.0.0', ture);
}
add_action( 'wp_enqueue_scripts', 'jinda_scripts' );

function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return ' ';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * JindaBlog - Custom Button
 * @since JindaBlog 1.0
 **/

add_shortcode( 'youtube', 'youtube_shortcode' );
function youtube_shortcode($atts, $content = null){
  $new_link = substr(strstr($content, "="), 1);
  return '<div class="responsive-unit"><iframe src="//www.youtube.com/embed/'. $new_link .'" frameborder="0"></iframe></div>';
}

add_shortcode( 'vimeo', 'vimeo_shortcode' );
function vimeo_shortcode($atts, $content = null){
  $new_link = substr(strstr($content, "com/"), 4);
  return '<div class="responsive-unit"><iframe src="//player.vimeo.com/video/'. $new_link .'?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>';
}

add_shortcode( 'responsive', 'responsive_shortcode' );
function responsive_shortcode($atts, $content = null){
  return '<div class="responsive-unit">'.$content.'</div>';
}

/**
 * JindaBlog - Custom Button
 * @since JindaBlog 1.0
 **/

add_action( 'init', 'jinda_editor_button' );
add_editor_style('css/editor-style.css');
function jinda_editor_button(){
  add_filter( "mce_external_plugins", "jinda_add_buttons" );
  add_filter( 'mce_buttons', 'jinda_register_buttons' );
}

function jinda_add_buttons( $plugin_array ) {
  $plugin_array['jinda_buttons'] = get_template_directory_uri() . '/custom-button.js';
  return $plugin_array;
}
function jinda_register_buttons( $buttons ) {
  array_push( $buttons, 'dropcap', 'vdoyoutube', 'vdovimeo', 'responsivebtn' ); 
  return $buttons;
}

?>