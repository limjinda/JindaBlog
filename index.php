<?php get_header(); ?>

		<!-- rightside -->
		<main class="home-right-block">
			<div class="hero-unit">
				<!-- loop -->
				<div class="home-post-list">
					<div class="uk-grid uk-grid-small" data-uk-grid-match>
						<?php if (have_posts()): ?>
							<?php while (have_posts()): the_post(); ?>
								<?php get_template_part( 'views/content', 'home' ); ?>
							<?php endwhile; ?>
						<?php else : ?>
							<?php get_template_part( 'views/content', 'none' ); ?>
						<?php endif; ?>
					</div>
				</div>
				<!-- /loop -->
				<?php get_template_part('views/pagination') ?>
				<!-- footer -->
				<?php get_template_part('views/footer'); ?>
			</div>
		</main>

		<div class="uk-clearfix"></div>

	</div>

<?php get_footer(); ?>