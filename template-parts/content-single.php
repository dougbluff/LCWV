<?php
/**
 * Template part for displaying single posts.
 *
 * @package Lake Chelan Wine Valley
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
<?php the_breadcrumb(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<div class="entry-meta">
			<?php // lakechelanwinevalley_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php echo the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->

</article><!-- #post-## -->

