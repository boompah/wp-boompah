<?php
/**
 * Template Name: About Page
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php while ( have_posts() ) : the_post(); ?>


<section class="headline">
	<div class="container">
	<h1 class="headline__main">
		<?php the_field('headline'); ?>
		<div class="headline__img">
			<svg id="svg2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.2 60"><defs><style>.cls-1{fill:#fff;}</style></defs><title>maple_leaf</title><g id="layer1"><path id="path1882" class="cls-1" d="M32.67,2.67,29.56,8.54l-1.77,3.32a1.59,1.59,0,0,1-1.94.44l-4-2v.06l0,0,.91,4.8,1.71,9.35c.24,1.6-.67,2.48-2,1.18L16.25,18.8l-1.11,3.77A1.15,1.15,0,0,1,13.9,23L6.18,21.39,8.53,30a1.13,1.13,0,0,1-.25,1.29L5.07,32.87,18.19,43.64c.55.44.85.7.72,1.88L17.8,49.28l12.88-1.41c.51,0,.94.17.93.48l-.78,14.27,3.69.05-.87-14.31c0-.37.32-.55.89-.49l13.08,1.48L46.6,46a1.94,1.94,0,0,1,.24-2.08l13.43-11-3.22-1.57A1.14,1.14,0,0,1,56.8,30l2.36-8.61-7.73,1.65a1.14,1.14,0,0,1-1.24-.47l-1.11-3.76L42.87,25.7c-1.34,1.29-2.26.42-2-1.18l2-11.18.58-3.05-4,2a1.61,1.61,0,0,1-2-.47Z" transform="translate(-5.07 -2.67)"/></g></svg>
		</div>
	</h1>
</div>
</section>

<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="content-area" id="primary">
			<main class="site-main about" id="main" role="main">

				<section class="moar_purple"></section>

				<section class="crew__wrap">
					<div class="crew__heading"><p><?php the_field('crew_heading');?></p></div>
					<div class="crew__member">
						<img src="<?php the_field('crew_member_1_image');?>" class="" alt=""/>
						<h2><?php the_field('crew_member_1_name');?></h2>
						<h3><?php the_field('crew_member_1_title'); ?></h3>
					</div>
					<div class="crew__member">
						<img src="<?php the_field('crew_member_2_image');?>" class="" alt=""/>
						<h2><?php the_field('crew_member_2_name');?></h2>
						<h3><?php the_field('crew_member_2_title'); ?></h3>
					</div>
				</section>

				<section class="social">
					<div class="social__heading">
						<h2><?php the_field('social_heading'); ?></h2>
					</div>
					<div class="social__instagram">

						<?php echo do_shortcode('[instagram-feed showheader=false]'); ?>
					</div>
				</section>


			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>
