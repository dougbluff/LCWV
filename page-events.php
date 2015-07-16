<?php
/**
 * Template Name: My Custom Events Page 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Lake Chelan Wine Valley
 */

get_header(); ?>
<?php echo do_shortcode('[rev_slider rand_slide]'); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main events" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'events' ); ?>

				

			<?php endwhile; ?>
			
		</main>
	</div>


<?php get_footer(); ?>
