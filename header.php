<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Lake Chelan Wine Valley
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php wp_head(); ?>
</head>
<?php // echo get_page_template(); ?>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site"
<?php if(get_field('hero_image')){ ?> 
style="background-image: url('<?php the_field('hero_image'); ?>');"
<?php } ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'lakechelanwinevalley' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="col-md-6"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php the_field('your_logo', 'option'); ?>"/></a></div>
		<div class="col-md-6"><?php wp_nav_menu( array('menu' => 'Top Menu' )); ?></div>
			
		

		
	</header><!-- #masthead -->
	<div class="col-md-12 sitenav">
	<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		
	</nav><!-- #site-navigation -->



	</div>

	<div id="content" class="container-fluid">
