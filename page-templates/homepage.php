<?php
/**
 * Template Name: Home Page
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
			<div class="content-area" id="primary">
				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<section class="headline">
							<h1 class="headline__main"><?php the_field('headline'); ?></h1>
							<h2 class="headline__sub"><?php the_field('sub_header'); ?></h2>
						</section>
						
					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
