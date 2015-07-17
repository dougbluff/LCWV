<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Lake Chelan Wine Valley
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-xs-12 col-sm-3 foot-1">
			<h3>Newsletter Signup</h3>
			<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true"]'); ?>
		</div>
		<div class="col-xs-12 col-sm-3 foot-2">
			<h3>Lake Chelan AVA</h3>
			<ul class="menu">
				<li>
					<a href="/about-us/">About Us</a>
				</li>
				<li>
					<a href="/membership/">Membership</a>
				</li>
				<li>
					<a href="/member-listing/">Member Listing</a>
				</li>
				<li>
					<a href="/contact-us/">Contact Us</a>
				</li>
			</ul>
		</div>
		<div class="col-xs-12 col-sm-3 foot-3">
			<?php echo do_shortcode('[custom-facebook-feed]');?>
		</div>
		<div class="col-xs-12 col-sm-3 foot-4">
		<img src="<?php get_site_url(); ?>/wp-content/uploads/2015/06/logo-vert.png"/>
			<p>Socialize: <a href="https://twitter.com/LakeChelanAVA" target="_blank">Twitter</a> | <a href="https://www.facebook.com/LakeChelanWineValley" target="_blank">Facebook</a> |
<a href=https://www.pinterest.com/lakechelanwine/ target="_blank">Pinterest</a> |
<a href="https://instagram.com/lakechelanwinevalley/" target="_blank">Instagram</a></p>
			<p><a href="mailto:lakechelanwinealliance@outlook.com">lakechelanwinealliance@outlook.com</a></p>
			<p>PO Box 777, Chelan, WA 98816</p>
		</div>
		<div class="sub-footer">
			<p>Copyright © <?php echo date("Y"); ?> Lake Chelan Wine Valley. All Rights Reserved.</p>
		</div>
	</footer>
	
</div>

<?php wp_footer(); ?>
</body>
</html>
