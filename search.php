<?php
/**
 * The template for displaying Search Results pages
 *
 * @package Jirayu_L
 * @subpackage JindaBlog
 * @since JindaBlog 1.0
 */

get_header(); ?>

<main class="home-right-block">
	<div class="hero-unit">
		<div class="search-results-page">

		<?php if ( have_posts() ) : ?>
			
			<div class="uk-alert uk-alert-large wmb">
				<h3><i class="uk-icon-search"></i> <?php _e('คำที่คุณใช้ค้นหา: ', 'jindaBlog') ?><?php echo get_search_query(); ?></h3>
			</div>

			<div class="uk-grid">

				<?php while ( have_posts() ) : the_post(); ?>
					<div class="uk-width-1-1">
						<?php get_template_part( 'views/content' ); ?>
					</div>
				<?php endwhile; ?>
			</div>
			<?php get_template_part('views/pagination') ?>
			<?php get_template_part( 'views/footer' ); ?>

		<?php else: ?>

			<?php get_template_part( 'views/content', 'none' ); ?>
		
		<?php endif; ?>

		</div>
	</div>
</main>

<?php get_footer(); ?>