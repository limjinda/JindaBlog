<?php
/**
 * The template used for displaying page content
 *
 * @package Jirayu_L
 * @subpackage JindaBlog
 * @since JindaBlog 1.0
 */
?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<h3 class="entry-title"><?= get_the_title(); ?></h3>
	<div class="entry-content">
		<?php the_content(); ?>
		<p class="uk-text-right uk-text-small uk-text-mute"><i class="uk-icon-cog"></i>	<?php edit_post_link(__('edit', 'jindaBlog')); ?></p>
	</div>

</article>