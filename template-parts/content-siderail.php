<?php
/**
* Template part for displaying single posts.
*
* @package Lake Chelan Wine Valley
*/

?>

<div id="rightCol" class="grid_three twoR zenlast">

	<div id="right" class="sidebar">

		<div class="moduletable">
			<div class="moduleTitle">
				<h3><span>Connect with Us</span></h3>
			</div>
			<div class="jbmoduleBody">
				<div class="custom">
					<p>
						<a href="https://www.facebook.com/LakeChelanWineValley" target="_blank">
							<img src="<?php get_site_url(); ?>/wp-content/uploads/2015/06/social-facebook-01.jpg" border="0" alt="Follow us on Facebook" width="34" onmouseover="this.src='<?php get_site_url(); ?>/wp-content/uploads/2015/06/social-facebook-02.jpg';" onmouseout="this.src='<?php get_site_url(); ?>/wp-content/uploads/2015/06/social-facebook-01.jpg';" style="margin-right: 7px;">
						</a>
						<a href="https://twitter.com/LakeChelanAVA" target="_blank">
							<img src="<?php get_site_url(); ?>/wp-content/uploads/2015/06/social-twitter-01.jpg" border="0" alt="Follow us on Twitter" width="34" onmouseover="this.src='<?php get_site_url(); ?>/wp-content/uploads/2015/06/social-twitter-02.jpg';" onmouseout="this.src='<?php get_site_url(); ?>/wp-content/uploads/2015/06/social-twitter-01.jpg';" style="margin-right: 7px;">
						</a>
						<a href="/contact-us.html">
							<img src="<?php get_site_url(); ?>/wp-content/uploads/2015/06/social-email-01.jpg" border="0" alt="Contact Us" width="34" onmouseover="this.src='<?php get_site_url(); ?>/wp-content/uploads/2015/06/social-email-02.jpg';" onmouseout="this.src='<?php get_site_url(); ?>/wp-content/uploads/2015/06/social-email-01.jpg';" style="margin-right: 7px;">
						</a>
						<a href="/images/downloads/LCWV_Driving_Map.pdf" target="_blank">
							<img src="<?php get_site_url(); ?>/wp-content/uploads/2015/06/social-map-01.png" border="0" alt="Download a Driving Map" width="34" height="34" onmouseover="this.src='<?php get_site_url(); ?>/wp-content/uploads/2015/06/social-map-02.png';" onmouseout="this.src='<?php get_site_url(); ?>/wp-content/uploads/2015/06/social-map-01.png';">
						</a>
					</p>
				</div>
			</div>
		</div>
		<div class="moduletable">
			<div class="moduleTitle">
				<h3>
					<span>Newsletter Signup</span>
				</h3>
			</div>
		<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
		</div>
	</div>
</div>