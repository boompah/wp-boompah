<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" />
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i" rel="stylesheet">
	<?php wp_head(); ?>
	<!--[if IE]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<![endif]-->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-15341567-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-15341567-1');
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<script src='<?php echo get_template_directory_uri(); ?>/js/navigation.js'></script>
	<script src='<?php echo get_template_directory_uri(); ?>/js/velocity.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.1/masonry.pkgd.js'></script>
	<script>

		$(document).ready(function($){

			$(".headline__main, .headline__sub").addClass("load");
			$(".featuredProject--img-right").addClass("load");
			$(".contactForm__heading").addClass("load");
			$(".crew__wrap").addClass("load");
			$(".project__wrapper").addClass("load");


			var overlayNav = $('.cd-overlay-nav'),
					overlayContent = $('.cd-overlay-content'),
					navigation = $('.cd-primary-nav'),
					toggleNav = $('.cd-nav-trigger');

			//inizialize navigation and content layers
			layerInit();
			$(window).on('resize', function(){
				window.requestAnimationFrame(layerInit);
			});

			//open/close the menu and cover layers
			toggleNav.on('click', function(){
				if(!toggleNav.hasClass('close-nav')) {
					//it means navigation is not visible yet - open it and animate navigation layer
					toggleNav.addClass('close-nav');

					overlayNav.children('span').velocity({
						translateZ: 0,
						scaleX: 1,
						scaleY: 1,
					}, 500, 'easeInCubic', function(){
						navigation.addClass('fade-in');
					});
				} else {
					//navigation is open - close it and remove navigation layer
					toggleNav.removeClass('close-nav');

					overlayContent.children('span').velocity({
						translateZ: 0,
						scaleX: 1,
						scaleY: 1,
					}, 500, 'easeInCubic', function(){
						navigation.removeClass('fade-in');

						overlayNav.children('span').velocity({
							translateZ: 0,
							scaleX: 0,
							scaleY: 0,
						}, 0);

						overlayContent.addClass('is-hidden').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
							overlayContent.children('span').velocity({
								translateZ: 0,
								scaleX: 0,
								scaleY: 0,
							}, 0, function(){overlayContent.removeClass('is-hidden')});
						});
						if($('html').hasClass('no-csstransitions')) {
							overlayContent.children('span').velocity({
								translateZ: 0,
								scaleX: 0,
								scaleY: 0,
							}, 0, function(){overlayContent.removeClass('is-hidden')});
						}
					});
				}
			});

			function layerInit(){
				var diameterValue = (Math.sqrt( Math.pow($(window).height(), 2) + Math.pow($(window).width(), 2))*2);
				overlayNav.children('span').velocity({
					scaleX: 0,
					scaleY: 0,
					translateZ: 0,
				}, 50).velocity({
					height : diameterValue+'px',
					width : diameterValue+'px',
					top : -(diameterValue/2)+'px',
					left : -(diameterValue/2)+'px',
				}, 0);

				overlayContent.children('span').velocity({
					scaleX: 0,
					scaleY: 0,
					translateZ: 0,
				}, 50).velocity({
					height : diameterValue+'px',
					width : diameterValue+'px',
					top : -(diameterValue/2)+'px',
					left : -(diameterValue/2)+'px',
				}, 0);
			}
		});
	</script>

	<!-- Hotjar Tracking Code for www.boompah.com -->
	<script>
	    (function(h,o,t,j,a,r){
	        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
	        h._hjSettings={hjid:848153,hjsv:6};
	        a=o.getElementsByTagName('head')[0];
	        r=o.createElement('script');r.async=1;
	        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
	        a.appendChild(r);
	    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
	</script>

</head>

<body <?php body_class(); ?>>

<div class="hfeed site bg-white" id="page">

	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content','understrap' ); ?></a>
		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

		<nav class="navbar navbar-expand-md">

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					<!-- Boompah Logo -->
					boompah
				</a>

				<a class="cd-nav-trigger">Menu<i class="fas fa-bars cd-icon"></i><i class="far fa-times-circle cd-icon"></i>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'menu_class'      => 'cd-primary-nav container',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

				<div class="cd-overlay-nav"><span></span></div>
				<div class="cd-overlay-content"><span></span></div>


		</nav><!-- .site-navigation -->

		<?php if ( 'container' == $container ) : ?>
		</div><!-- .container -->
		<?php endif; ?>
	</div><!-- .wrapper-navbar end -->
