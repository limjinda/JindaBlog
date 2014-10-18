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
	
	<h3 class="entry-title"><?= get_the_title(); ?></h3>

	<?php if ( is_search() ) : ?>
	
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>

	<?php else : ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<?php endif; ?>

	<div class="entry-footer uk-text-right">
		<h4 class="entry-author"><?php the_author(); ?></h4>
		<div class="entry-meta"><?php _e('on', 'jindaBlog'); ?> <?php the_time('j F, Y'); ?> <?php _e('in', 'jindaBlog'); ?> <?php the_category(' ') ?></div>
	</div>

	<div class="entry-pagination">
		<div class="uk-grid">
			<div class="uk-width-1-2 uk-text-small"><?php previous_post_link() ?></div>
			<div class="uk-width-1-2 uk-text-right uk-text-small"><?php next_post_link() ?></div>
		</div>
		<hr class="uk-grid-divider">
	</div>

</article>