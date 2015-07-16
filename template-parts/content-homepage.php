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
	<div class="container">
		<?php
the_content(); ?>
	</div>
</article>