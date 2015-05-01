<div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-1 uk-width-large-1-2 post-block">
	<article class="uk-article">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php if (has_post_thumbnail()): ?>
				<figure>
					<?php the_post_thumbnail('jindaBlogCover', array('class' => 'home-post-image', 'alt' => get_the_title())) ?>
				</figure>
			<?php else: ?>
				<figure>
					<img src="http://www.placehold.it/768x475/2d2d2d/FFFFFF" class="home-post-image" alt="<?php the_title(); ?>" />
				</figure>
			<?php endif ?>
		</a>
		<h3 class="uk-article-title post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		<p class="uk-article-meta post-meta"><?php _e('on', 'jindaBlog') ?> <?php the_time('j F, Y'); ?>, <?php _e('in', 'jindaBlog') ?> <?php the_category(' ') ?></p>
		<p class="post-excerpt"><?= iconv_substr(get_the_excerpt(),0,175,"UTF-8").' '; ?> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="more-text"><?php _e('read more', 'jindaBlog'); ?></a></p>
		<hr class="uk-article-divider">
	</article>
</div>