<?php
/**
 * Template part for displaying single posts.
 *
 * @package Lake Chelan Wine Valley
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="col-md-12 page_body">
		<?php the_breadcrumb(); ?>

		<div class="entry-meta">
		</div>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
		
	</div>

	
</article>

