<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<?php global $jindaOpt; ?>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<?php if (is_single()): global $post; setup_postdata($post); ?>
  <?php $tags = get_the_tags($post); if( is_array($tags) ){ foreach ($tags as $tag) { $all_tags = $all_tags.$tag->name.", "; } } ?>
  <meta name="description" content="<?= iconv_substr(get_the_excerpt(),0,135,"UTF-8").'..'; ?>" />
  <meta name="keywords" content="<?= $all_tags ?>">
  <?php else: ?>
  <meta name="description" content="<?php echo $jindaOpt['opt-header-description']; ?>">
  <meta name="keywords" content="<?php echo $jindaOpt['opt-header-keyword']; ?>">
  <?php endif; ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- analytics -->
	<script>
	  <?php echo $jindaOpt['opt-header-analytics']; ?>
	</script>
	<!-- analytics -->
	<!-- custom header -->
	<?php echo $jindaOpt['opt-custom-header']; ?>
	<!-- custom header -->
	<?php wp_head(); ?>
</head>
<body <?php body_class( $class ); ?>>
	
	<div id="wrapper">

		<a href="#" class="icon-menu"><i class="icon uk-icon-bars"></i></a>

		<header class="home-left-block">
			<div class="hero-unit">
				<div class="main-author">
					<?php echo get_avatar(get_bloginfo('admin_email'), 120, nil, get_bloginfo('name')) ?>
					<div class="uk-clearfix"></div>
					<h1 class="site-title"><a href="<?= home_url() ?>"><?php bloginfo('name') ?></a></h1>
					<h2 class="site-slogan"><?php bloginfo('description') ?></h2>
				</div>
				
				<div class="short-divider"></div>
				<nav class="main-navigation">
					<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => '', 'menu_class' => 'uk-list uk-list-space') ); ?> 
					<div class="short-divider"></div>
					<?php if ($jindaOpt['opt-show-secondary-menu'] == 1): ?>
						<?php wp_nav_menu( array('theme_location' => 'secondary', 'container' => '', 'menu_class' => 'uk-list uk-list-space') ); ?> 
					<?php endif ?>
				</nav>
				<?php get_search_form(); ?>
			</div>			
		</header>