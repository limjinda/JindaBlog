<?php
/**
 * @package Jirayu_L
 * @subpackage JindaBlog
 * @since JindaBlog 1.0
 */
get_header(); ?>

<main class="home-right-block">
	<div class="hero-unit">
		<?php if ( is_front_page() ) {
			get_template_part( 'views/featured-content' );
		} ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'views/page' ); ?>
			<?php if ( comments_open() || get_comments_number() ) {
				comments_template();
			} ?>
		<?php endwhile; ?>
		<?php get_template_part( 'views/footer' ); ?>
	</div>
</main>

<?php get_footer(); ?>