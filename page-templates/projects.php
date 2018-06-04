<?php
/**
 * Template Name: Projects Template
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

          <div class="project" style="background-image: url('/wp-content/uploads/2018/03/upfeat-project-tile.jpg');">
  					<a href="http://upfeat.com/" class="project__link" title="" target="_blank">
  						<img src="/wp-content/uploads/2018/03/upfeat-project-logo.svg" class="project__logo" alt="">
  							<h2>Obsessed with content and technology.</h2>
  						<h3>UX Design / CMS System</h3>
  						<h4>Publishing</h4>
  					</a>
					</div>

          <div class="project" style="background-image: url('/wp-content/uploads/2018/03/02-sunryse-tile.jpg');">
						<a href="https://www.sunryseinfo.com/" class="project__link" title="" target="_blank">
							<img src="/wp-content/uploads/2018/03/02-sunryse-logo.png" class="project__logo" alt="">
 							<h2>Secure information management.</h2>
							<h3>Custom Squarespace Development</h3>
							<h4>Professional Services</h4>
						</a>
					</div>

          <div class="project" style="background-image: url('/wp-content/uploads/2018/03/03-ratchet-wrench-tile.jpg');">
  					<a href="https://www.ratchetandwrench.com/" class="project__link" title="" target="_blank">
  						<img src="/wp-content/uploads/2018/03/03-ratchet-wrench-logo.svg" class="project__logo" alt="">
  							<h2>A publication for the handy man.</h2>
  						<h3>UX Design / Development</h3>
  						<h4>Publisher</h4>
  					</a>
					</div>

          <div class="project testimonial">
						<h2>“BOOMPAH understands that design is more than just aesthetics, they understand that it’s also about solving problems.”</h2>
						<h3>‐ Founder @ SQUAR</h3>
					</div>

          <div class="project" style="background-image: url('/wp-content/uploads/2018/03/04-turnkey-tile.jpg');">
						<a href="https://www.turnkeyrenovators.ca/" class="project__link" title="" target="_blank">
							<img src="/wp-content/uploads/2018/03/04-turnkey-logo.png" class="project__logo" alt="">
 							<h2>Turnkey Home renovations.</h2>
							<h3>UX Design / Squarespace Development</h3>
							<h4>Business</h4>
						</a>
					</div>

          <div class="project" style="background-image: url('/wp-content/uploads/2018/03/05-indus-tile.jpg');">
						<a href="http://www.industechnology.com/" class="project__link" title="" target="_blank">
							<img src="/wp-content/uploads/2018/03/05-indus-logo.svg" class="project__logo" alt="">
 							<h2>Working with the US Department of Defence</h2>
							<h3>UX/UI Design</h3>
							<h4>Professional Services</h4>
						</a>
          </div>

          <div class="project" style="background-image: url('/wp-content/uploads/2018/03/06-deerskin-tile.jpg');">
						<a href="https://deerskinleather.shop/" class="project__link" title="" target="_blank">
							<img src="/wp-content/uploads/2018/03/06-deerskin-logo.svg" class="project__logo" alt="">
 							<h2>Quality, curated Fine Leather Goods.</h2>
							<h3>Shopify Development</h3>
							<h4>E-Commerce</h4>
						</a>
					</div>

				</section> <!-- .project__wrapper -->

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

			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<script>
  $('.project__list').masonry({
    // set itemSelector so .grid-sizer is not used in layout
    itemSelector: '.menu-item',
    // use element for option
    columnWidth: '.menu-item',
    percentPosition: true
  })
</script>

<?php get_footer(); ?>
