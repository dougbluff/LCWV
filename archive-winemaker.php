<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Lake Chelan Wine Valley
 */

get_header(); ?>
<?php echo do_shortcode('[rev_slider rand_slide]'); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<header class="entry-header">
				<?php the_breadcrumb(); ?>
			</header><!-- .page-header -->
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

			<?php endwhile; ?>

			<?php // the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
