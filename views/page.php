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
	</div>

</article>