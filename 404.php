<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Jirayu_L
 * @subpackage JindaBlog
 * @since JindaBlog 1.0
 */
get_header(); ?>

<main class="home-right-block">
	<div class="hero-unit">
		
		<div class="page-404">
			<h4 class="uk-text-center"><?php _e( '404 มีบางอย่างหายไป..', 'jindaBlog' ); ?></h4>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.png" class="none-image" alt="Nothing found" />
			<div class="uk-clearfix"></div>

			<p class="uk-text-center"><?php _e( 'แต่ไม่ต้องห่วง, เราจะพาคุณไปยังหน้าแรก', 'jindaBlog' ); ?></p>
			<p class="uk-text-center"><a href="<?php echo home_url() ?>" alt="back to home" class="uk-button uk-button-success">พาฉันกลับไปหน้าแรก</a></p>
			
		</div>

	</div>
</main>

<?php get_footer(); ?>