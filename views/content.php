<?php
/**
 * The Template for displaying all single posts
 *
 * @package Jirayu_L
 * @subpackage JindaBlog
 * @since JindaBlog 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( is_search() ) : ?>

		<div class="uk-grid" data-uk-grid-match>
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
		</div>

	<?php else : ?>

	<h3 class="entry-title"><?= get_the_title(); ?></h3>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<div class="entry-footer uk-text-right">
		<h4 class="entry-author author vcard">
			<span class="fn"><?php the_author(); ?></span>
		</h4>
		<div class="entry-meta"><?php _e('on', 'jindaBlog'); ?> <span class="updated"><?php the_time('Y-m-d'); ?></span> <?php _e('in', 'jindaBlog'); ?><?php the_category(' ') ?></div>
		<div class="addthis_sharing_toolbox"></div>
	</div>

	<div class="entry-pagination">
		<div class="uk-grid">
			<div class="uk-width-1-2 uk-text-small"><?php previous_post_link() ?></div>
			<div class="uk-width-1-2 uk-text-right uk-text-small"><?php next_post_link() ?></div>
		</div>
	</div>

	<?php global $jindaOpt; ?>
	<?php if ($jindaOpt['opt-enable-related'] == 1): ?>	

		<?php 
			$id = get_the_ID();
			$tags = get_the_tags();
			// $cates = get_the_category();
			// $post_cate = $cates[0]->cat_ID;
			if ( empty($tags) ){
				return false;
			}else{
				foreach ($tags as $tag) { $post_tag = $tag->term_id; }
				$related_args = array( 'post_type' => 'post', 'posts_per_page' => 3, 'tag_id' => $post_tag, 'post__not_in' => array($id) );
				$related_posts = new WP_Query($related_args);
			} ?>
			<?php if ($related_posts->have_posts()) { 
				while( $related_posts->have_posts()){ $related_posts->the_post(); ?>
					<div class="related-title-block">
						<div class="uk-grid">
							<div class="uk-width-1-1">
								<h3 class="related-title"><i class="uk-icon-bookmark"></i> <?php _e('Related posts', 'jindaBlog') ?></h3>
							</div>
						</div>
					</div>
					<!-- related posts -->				
					<div class="uk-grid" data-uk-grid-match>
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
							</div>
						</div>
					</div>
					<!-- /relate posts -->
					<hr class="uk-grid-divider">	
				<?php } ?>
			<?php }else{ ?>
				<!-- do nothing -->
			<?php } ?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>
	<?php endif ?>

</article>