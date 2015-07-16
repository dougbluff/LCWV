<?php
/* Template Name: My Custom Home Page 
 *
 * @package Lake Chelan Wine Valley
 */

get_header(); ?>
<?php echo do_shortcode('[rev_slider home_slide]'); ?>
	<div id="primary" class="content-area home">
		<main id="main" class="site-main" role="main">
				<div class="col-md-7 naturally">
					
						<div class="leftarrow">
							<a href="#" class="left-click"><i class="fa fa-chevron-left"></i></a>
						</div>
					
					
						<div class="rightarrow">
							<a href="#" class="right-click"><i class="fa fa-chevron-right"></i></a>
						</div>

					<div class="intoxicating">
						<span>
							Naturally Intoxicating
						</span>
					</div>
				</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'homepage' ); ?>

				

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
<script type="text/javascript">
jQuery(window).bind("load", function() {
	jQuery(document).ready(function($) {
	    $(".left-click").click(function(){
	    // alert('you clicked left');
	    $(".tp-leftarrow").click(); 
	    return false;
		});
		$(".right-click").click(function(){
	    $(".tp-rightarrow").click(); 
	    return false;
		});
	});   
});

</script>