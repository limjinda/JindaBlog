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
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<!-- analytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-37860514-1', 'auto');
	  ga('send', 'pageview');
	</script>
	<!-- analytics -->
	<?php wp_head(); ?>
</head>
<body <?php body_class( $class ); ?>>
	<?php global $jindaOpt; ?>
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