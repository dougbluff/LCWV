<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Lake Chelan Wine Valley
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_breadcrumb(); ?>
	</header> <!-- .entry-header -->


	<div class="col-md-12">
	<?php  the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->
	<?php echo do_shortcode('[gmw form="1" orderby="post_title" order="DESC"]'); ?>

	
</article><!-- #post-## -->

