<?php
/**
 * Template Name: Projects Page
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="content-area" id="primary">
			<main class="site-main projects" id="main" role="main">

				<section class="headline">
					<h1 class="headline__main"><?php the_field('headline'); ?></h1>
				</section>

				<section class="project__wrapper">

					<?php query_posts('cat=3'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

						<?php
						$value = get_field( "display_type" );
						if( $value == 'Testimonial' ) { ?>
							<div class="project testimonial">
								<h2><?php the_field('testimonial_quote'); ?></h2>
								<h3>&dash; <?php the_field('testimonial_name'); ?></h3>
							</div>
						<?php } else { ?>
							<div class="project" style="background-image: url('<?php the_field('project_image'); ?>');">
								<a href="<?php the_field('project_url'); ?>" class="project__link" title="" target="_blank">
									<img src="<?php the_field('project_logo'); ?>" class="project__logo" alt=""/>
		 							<h2><?php the_field('project_header'); ?></h2>
									<h3><?php the_field('project_type'); ?></h3>
									<h4><?php the_field('project_industry'); ?></h3>
								</a>
	 						</div>
						<?php } ?>

					<?php endwhile; endif; ?>

				</section>

				<section class="project__list">
					<!-- The WordPress Menu goes here -->
					<?php wp_nav_menu(
						array(
							'theme_location'  => 'project',
							'container_class' => '',
							'menu_class'      => 'project__list-wrap',
							'fallback_cb'     => '',
							'menu_id'         => 'project_menu',
							'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						)
					); ?>
				</section>

				<script>

				$('.project__list').masonry({
				  // set itemSelector so .grid-sizer is not used in layout
				  itemSelector: '.menu-item',
				  // use element for option
				  columnWidth: '.menu-item',
				  percentPosition: true
				})

				</script>

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
