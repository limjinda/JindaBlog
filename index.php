<?php get_header(); ?>

		<!-- rightside -->
		<main class="home-right-block">
			<div class="hero-unit">
				<!-- loop -->
				<div class="home-post-list">
					<div class="uk-grid uk-grid-small" data-uk-grid-match>
						<?php if (have_posts()): ?>
							<?php while (have_posts()): the_post(); ?>
								<div class="uk-width-1-1 uk-width-small-1-2 uk-width-medium-1-1 uk-width-large-1-2 post-block">
									<article class="uk-article">
										<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="http://www.placehold.it/768x475" class="home-post-image" alt="<?php the_title(); ?>" /></a>
										<h3 class="uk-article-title post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
										<p class="uk-article-meta post-meta">on <?php the_time('j F, Y'); ?>, Posted in <?php the_category(' ') ?></p>
										<p class="post-excerpt"><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="more-text"><?php _e('read more..', 'jindaBlog'); ?></a></p>
										<hr class="uk-article-divider">
									</article>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
				<!-- /loop -->

				<footer class="footer-block">
					<div class="hero-unit">
						<p class="footer-copyright uk-text-center">
							all posts in <a href="<?= home_url() ?>">Jir4yu.me</a> was written by <a href="https://plus.google.com/114178088498011147130?rel=author" target="_blank">Jirayu L</a> under <a href="http://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank">CC BY-NC-ND 4.0</a>
						</p>
						<p class="footer-credit uk-text-center">
							<a href="https://github.com/jir4yu/JindaBlog" target="_blank" title="JiraBlog">JindaBlog</a> is an opensource WordPress theme, created by <a href="http://www.jindatheme.com" target="_blank" title="JindaTheme">JindaTheme</a>
						</p>
						<ul class="footer-social-list">
							<li>
								<a href="http://www.facebook.com/byjir4yu" title="My Facebook" target="_blank">
									<i class="uk-icon-facebook-square facebook"></i>
								</a>
							</li>
							<li>
								<a href="http://www.twitter.com/jir4yu" title="My Twitter" target="_blank">
									<i class="uk-icon-twitter-square twitter"></i>
								</a>
							</li>
							<li>
								<a href="https://plus.google.com/+JirayuL" title="My Google Plus" target="_blank">
									<i class="uk-icon-google-plus-square gplus"></i>
								</a>
							</li>
							<li>
								<a href="https://plus.google.com/+JirayuL" title="My Google Plus" target="_blank">
									<i class="uk-icon-linkedin-square linkedin"></i>
								</a>
							</li>
							<li>
								<a href="https://plus.google.com/+JirayuL" title="My Google Plus" target="_blank">
									<i class="uk-icon-github-square github"></i>
								</a>
							</li>
						</ul>
					</div>
				</footer>
			</div>
		</main>

		<div class="uk-clearfix"></div>

<?php get_footer(); ?>