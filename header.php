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
	<?php wp_head(); ?>
	<!-- Start Visual Website Optimizer Asynchronous Code -->
	<script type='text/javascript'>
	var _vwo_code=(function(){
	var account_id=130873,
	settings_tolerance=2000,
	library_tolerance=2500,
	use_existing_jquery=false,
	// DO NOT EDIT BELOW THIS LINE
	f=false,d=document;return{use_existing_jquery:function(){return use_existing_jquery;},library_tolerance:function(){return library_tolerance;},finish:function(){if(!f){f=true;var a=d.getElementById('_vis_opt_path_hides');if(a)a.parentNode.removeChild(a);}},finished:function(){return f;},load:function(a){var b=d.createElement('script');b.src=a;b.type='text/javascript';b.innerText;b.onerror=function(){_vwo_code.finish();};d.getElementsByTagName('head')[0].appendChild(b);},init:function(){settings_timer=setTimeout('_vwo_code.finish()',settings_tolerance);this.load('//dev.visualwebsiteoptimizer.com/j.php?a='+account_id+'&u='+encodeURIComponent(d.URL)+'&r='+Math.random());var a=d.createElement('style'),b='body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',h=d.getElementsByTagName('head')[0];a.setAttribute('id','_vis_opt_path_hides');a.setAttribute('type','text/css');if(a.styleSheet)a.styleSheet.cssText=b;else a.appendChild(d.createTextNode(b));h.appendChild(a);return settings_timer;}};}());_vwo_settings_timer=_vwo_code.init();
	</script>
	<!-- End Visual Website Optimizer Asynchronous Code -->
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