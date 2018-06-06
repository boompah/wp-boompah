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

<div class="hfeed site bg-<?php the_field("color_scheme") ?>" id="page">

	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content','understrap' ); ?></a>
		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

		<nav class="navbar navbar-expand-md">

				<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					<!-- Boompah Logo -->
					<svg xmlns="http://www.w3.org/2000/svg" width="150" height="23" viewBox="0 0 150 23">
						<g fill="#fff" fill-rule="evenodd">
							<path d="M9.92 17.43a1.866 1.866 0 0 0 1.869-1.873c0-1.037-.891-1.873-1.868-1.873H6.127v3.745h3.794zM8.858 8.93a1.867 1.867 0 0 0 1.868-1.872 1.867 1.867 0 0 0-1.868-1.873h-2.73V8.93h2.73zM.466 22.097V.491h9.512c3.449 0 6.38 2.967 6.38 6.424 0 1.469-.546 2.823-1.38 3.889 1.466 1.181 2.443 2.996 2.443 4.955 0 3.428-2.902 6.338-6.322 6.338H.466zM29.406 6.137c-2.817 0-5.116 2.304-5.116 5.156 0 2.824 2.3 5.157 5.116 5.157 2.844 0 5.143-2.333 5.143-5.157a5.145 5.145 0 0 0-5.143-5.156m0-5.646c5.948 0 10.776 4.868 10.776 10.832 0 5.962-4.828 10.774-10.776 10.774-5.949 0-10.748-4.812-10.748-10.774C18.658 5.359 23.457.49 29.406.49M52.857 6.137c-2.817 0-5.116 2.304-5.116 5.156 0 2.824 2.299 5.157 5.116 5.157C55.7 16.45 58 14.117 58 11.293c0-2.852-2.299-5.156-5.143-5.156m0-5.646c5.948 0 10.776 4.868 10.776 10.832 0 5.962-4.828 10.774-10.776 10.774-5.95 0-10.748-4.812-10.748-10.774C42.109 5.359 46.908.49 52.857.49M77.198 8.499L85.963.49h2.558v21.605h-5.69v-11.09l-5.633 5.156-5.661-5.128v11.062h-5.69V.491h2.557zM97.373 11.466h3.506c1.724 0 3.104-1.354 3.104-3.082a3.095 3.095 0 0 0-3.104-3.111h-3.506v6.193zM91.712.491h9.081c4.368 0 7.931 3.572 7.931 7.95 0 4.35-3.535 7.923-7.816 7.923h-3.535v5.732h-5.661V.491zM115.479 14.491h4.397l-2.185-4.753-2.212 4.753zm-9.168 7.605L116.37.49h2.557l10.145 21.606h-5.661l-1.322-2.823h-8.823l-1.293 2.823h-5.662zM137.033.49v7.692h6.84V.491h5.661v21.605h-5.661v-8.239h-6.84v8.24h-5.661V.49z"/>
						</g>
					</svg>
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
