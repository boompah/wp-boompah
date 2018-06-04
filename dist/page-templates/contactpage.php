<?php
/**
 * Template Name: Contact Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="content-area" id="primary">
			<main class="site-main contact" id="main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<section class="headline">
						<h1 class="headline__main"><?php the_field('headline'); ?></h1>
						<h2 class="headline__sub"><a href="mailto:<?php the_field('contact_email'); ?>"><?php the_field('contact_email'); ?></a></h2>
					</section>

					<section class="contactForm__wrap">
						<div class="contactForm__heading">
							<h3><?php the_field('city_1'); ?></h3>
							<h3><?php the_field('city_2'); ?></h3>
							<h3><?php the_field('city_3'); ?></h3>
						</div>
						<div class="contactForm__address">
							<h4><?php the_field('address') ?></h4>
						</div>
						<div class="contactForm__form">
							<h4><?php the_field('contact_form_header') ?></h4>
							<?php echo do_shortcode( '[contact-form-7 id="24" title="Main Contact Form"]' ); ?>
						</div>
					</section>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
