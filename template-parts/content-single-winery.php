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

			
		
		<div class="breadcrumb-meta">
			<?php echo 'im the breadcrumb'; ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
	
		<div class="col-md-9 page_body">
		<div class="my_logo"><?php the_post_thumbnail(); ?></div>
		<?php echo the_title( '<h2 class="entry-title">', '</h2>' ); ?>
		<?php the_content(); ?>
		</div>
		<!-- <div class="col-md-3">
			<?php the_post_thumbnail(); ?>
		</div> -->
		<div class="col-md-3">
		<?php get_template_part( 'template-parts/content', 'siderail' ); ?>
		<?php // Geo WP Variables
		$my_phone = do_shortcode('[gmw_post_info info="phone" divider=", "]');
		$my_map = do_shortcode('[gmw_single_location map="1" map_width="100%" map_height="250px" additional_info="0" directions="0"]');
		$my_address = do_shortcode('[gmw_post_info info="street,state" divider=", "]');
		$my_url = do_shortcode('[gmw_post_info info="website" divider=""]');
		$my_hours = get_field('hours');
		$my_join_us = get_field('join_us');
		$my_tours_available = get_field('tours_available');
		$my_come_enjoy = get_field('come_enjoy');
		$my_you_can = get_field('you_can');
		$my_available_for = get_field('available_for');
			if($my_map){
				echo$my_map;
			}
			if($my_url){
				echo '<a href="' . $my_url . '" target="_blank"><h2>Visit Website</h2></a>';
				echo '<a href="' . $my_url . '" target="_blank">' . $my_url . '</a>';
			}
			
			if($my_address) { ?>
				<div class="winery-meta address">
					<span>Address:</span>
					<?php echo $my_address; ?>
				</div>
			<?php } 
			
			if($my_phone) { ?>
			<div class="winery-meta phone">
				<span>Phone:</span>
				<?php echo $my_phone; ?>
			</div>
			<?php }

			if($my_hours) { ?>
				<div class="winery-meta hours">
					<span>Hours:</span>
					<?php echo $my_hours; ?>
				</div>
			<?php }
			$post_object = get_field('winemaker');
				if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
					<div class="winery-meta winemaker">
					    <span>Winemaker:</span>
					    <div>
					    	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					    </div>
					    <?php wp_reset_postdata(); ?>
				    </div>
				<?php endif; 
				
			if($my_join_us) { ?>
			<div class="winery-meta join_us">
				<span>Join us:</span>
				<?php echo $my_join_us; ?>
			</div>
			<?php }
			if($my_tours_available) { ?>
			<div class="winery-meta tours_available">
				<span>Tours Available:</span>
				<?php echo $my_tours_available; ?>
			</div>
			<?php }
			if($my_come_enjoy) { ?>
			<div class="winery-meta come_enjoy">
				<span>Come enjoy:</span>
				<?php echo $my_come_enjoy; ?>
			</div>
			<?php }
			if($my_you_can) { ?>
			<div class="winery-meta you_can">
				<span>You can:</span>
				<?php echo $my_you_can; ?>
			</div>
			<?php }
			if($my_available_for) { ?>
			<div class="winery-meta available_for">
				<span>Available for:</span>
				<?php echo $my_available_for; ?>
			</div>
			<?php } ?>
		</div>
		
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->

