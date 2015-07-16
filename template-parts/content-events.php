<?php

/**
 * The template used for displaying page content in page.php
 *
 * @package Lake Chelan Wine Valley
 */
?>

<article id="post-<?php
the_ID(); ?>" <?php
post_class(); ?>>
	<header class="entry-header">
		<?php
the_breadcrumb(); ?>
	</header> 
	<div class="col-md-12 page_body">
	<?php
the_title('<h2 class="entry-title">', '</h2>'); ?>
		<?php
latest_events(); ?>
	</div>
</article>

