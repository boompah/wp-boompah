<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<a href="<?php echo get_permalink( $post->ID ); ?>" title="<?php echo get_the_title( $post->ID ); ?>" class="article-link">
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		<header class="entry-header">
			<span class="entry-header__category"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></span>
			<h2 class="entry-title"><?php echo get_the_title( $post->ID ); ?></h2>
		</header><!-- .entry-header -->
	</a>
</article><!-- #post-## -->
