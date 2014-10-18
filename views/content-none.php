<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package Jirayu_L
 * @subpackage JindaBlog
 * @since JindaBlog 1.0
 */
?>

<div class="page-content">
	<?php if ( is_search() ) : ?>
		
		<div class="uk-alert uk-alert-danger uk-text-center uk-alert-large wmb">
			<h3><i class="uk-icon-search"></i> <?php _e( 'Sorry, but nothing matched your search terms.', 'jindaBlog' ); ?></h3>
		</div>
		
		<p class="uk-text-center"><?php _e( 'Search again? or check the recent below.', 'jindaBlog' ); ?></p>
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/none.png" class="none-image" alt="Nothing found" />
		<div class="uk-clearfix"></div>
		
		<div class="uk-grid-divider"></div>

		<?php $args = array( 'post_type' => 'post', 'post_per_page' => 7, 'ignore_sticky_posts' => 1 ) ?>
		<?php $recent = new WP_Query( $args ); ?>

		<?php if ( $recent->have_posts() ) { ?>
			<div class="uk-grid" data-uk-grid-match>
			<?php while ( $recent->have_posts() ) { $recent->the_post();?>
				
					<div class="uk-width-1-1 uk-width-medium-4-10 uk-width-large-3-10 list-item">
						<a href="<?php echo the_permalink() ?>">
							<?php if (has_post_thumbnail()): ?>
								<?php the_post_thumbnail('jindaBlogCover', array('class' => 'list-image', 'alt' => get_the_title())) ?>
							<?php else: ?>
								<img src="http://www.placehold.it/270x180" class="list-image" alt="<?php echo get_the_title() ?>">
							<?php endif ?>
						</a>
					</div>
					<div class="uk-width-1-1 uk-width-medium-6-10 uk-width-large-7-10">
						<h3 class="entry-title search-title"><a href="<?php echo the_permalink() ?>"><i class="uk-icon-arrow-circle-o-right"></i> <?= get_the_title(); ?></a></h3>
						<div class="entry-summary search-summary">
							<?= iconv_substr(get_the_excerpt(),0,200,"UTF-8").' '; ?>
							<hr class="uk-grid-divider">
						</div>
					</div>
			<?php } ?>
			</div>

		<?php }; ?>

	<?php endif; ?>
</div>