<?php
/**
 * The Template for displaying all single posts
 *
 * @package Jirayu_L
 * @subpackage JindaBlog
 * @since JindaBlog 1.0
 */
global $jindaOpt;
get_header();
?>

<?php echo $jindaOpt['opt-vendor-addthis']; ?>

<main class="home-right-block">
	<div class="hero-unit">
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'views/content', get_post_format() ); ?>				
				<?php if ( comments_open() || get_comments_number() ) {
						comments_template();
				}?>
			<? endwhile; ?>
			<?php get_template_part('views/footer'); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>