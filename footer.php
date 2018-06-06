<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="wrapper-footer">
	<div class="<?php echo esc_attr( $container ); ?>">
		<footer class="site-footer row" id="colophon">

			<div class="copyright">
				<h6>Copyright &copy; <?php echo date("Y"); ?> Boompah</h6>
			</div>

			<div class="social">
				<a href="https://www.facebook.com/gotboompah/" alt="Boompah on Facebook" target="_blank" class="social__link"><i class="fab fa-facebook-f"></i></a>
				<a href="https://twitter.com/gotboompah/" alt="Boompah on Twitter" target="_blank" class="social__link"><i class="fab fa-twitter"></i></a>
				<a href="https://medium.com/boompah" alt="Boompah on Medium" target="_blank" class="social__link"><i class="fab fa-medium"></i></a>
				<a href="https://www.instagram.com/boompah/" alt="Boompah on Instagram" target="_blank" class="social__link"><i class="fab fa-instagram"></i></a>
			</div>

			<div class="email">
				<h6><a href="/contact">Say Hello</a></h6>
			</div>

		</footer><!-- #colophon -->
	</div><!-- container end -->
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<!-- Start of HubSpot Embed Code -->
<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/1012062.js"></script>
<!-- End of HubSpot Embed Code -->

</body>
</html>
