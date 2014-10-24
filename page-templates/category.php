<?php
/**
 * Template Name: Category
 *
 * @package Jirayu_L
 * @subpackage JindaBlog
 * @since JindaBlog 1.0
 */
get_header(); ?>

<?php $args = array( 'type' => 'post', 'pad_counts' => 1 ) ?>
<?php $categories = get_categories($args); ?>

<main class="home-right-block">
	<div class="hero-unit">

		<div class="page-category">
			<div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.uk-panel'}">
				<?php foreach ($categories as $cate) { ?>
				<div class="uk-width-1-1 uk-width-small-1-2 uk-width-large-1-3">
					<div class="uk-panel uk-panel-box">
						<h3 class="uk-panel-title"><i class="uk-icon-folder-open-o"></i> <a href="<?php echo get_category_link( $cate->term_id ) ?>" title="<?php echo $cate->name ?>"><?php echo $cate->name ?></a></h3>
						<?php echo $cate->description ?>
						<p class="uk-text-small uk-text-primary uk-text-bold uk-text-right"><?php echo $cate->count ?> <?php _e('เรื่อง', 'jindaBlog') ?></p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php get_template_part('views/footer') ?>

	</div>
</main>

<?php get_footer(); ?>