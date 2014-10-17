<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php bloginfo('name') ?> <?php wp_title(); ?></title>
	<meta name="keywords" content="Jir4yu.me, JindaTheme, WordPress, Responsive Theme" />
	<meta name="description" content="<?php bloginfo('description') ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/bower_components/uikit/css/uikit.almost-flat.min.css">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script src="<?php echo get_stylesheet_directory_uri() ?>/bower_components/modernizr/modernizr.js"></script>
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body>

	<div id="wrapper">

		<a href="#" class="icon-menu">-</a>

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
					<?php wp_nav_menu( array('theme_location' => 'secondary', 'container' => '', 'menu_class' => 'uk-list uk-list-space') ); ?> 
				</nav>
			</div>			
		</header>