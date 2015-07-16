<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Lake Chelan Wine Valley
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<header class="entry-header">
		<?php the_breadcrumb(); ?>
	</header> <!-- .entry-header -->

	<div class="col-md-9">
	<?php  the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->
	<div class="col-md-3">
		<?php get_template_part( 'template-parts/content', 'siderail' ); ?>
	</div>
	
</article><!-- #post-## -->

