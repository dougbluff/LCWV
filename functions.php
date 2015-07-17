<?php
/**
 * Lake Chelan Wine Valley functions and definitions
 *
 * @package Lake Chelan Wine Valley
 */

if ( ! function_exists( 'lakechelanwinevalley_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lakechelanwinevalley_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Lake Chelan Wine Valley, use a find and replace
	 * to change 'lakechelanwinevalley' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'lakechelanwinevalley', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'lakechelanwinevalley' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'lakechelanwinevalley_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // lakechelanwinevalley_setup
add_action( 'after_setup_theme', 'lakechelanwinevalley_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lakechelanwinevalley_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lakechelanwinevalley_content_width', 640 );
}
add_action( 'after_setup_theme', 'lakechelanwinevalley_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function lakechelanwinevalley_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lakechelanwinevalley' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'lakechelanwinevalley_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lakechelanwinevalley_scripts() {
	wp_enqueue_style( 'lakechelanwinevalley-style', get_stylesheet_uri() );

	wp_enqueue_style( 'lakechelanwinevalley-stylesheets', get_template_directory_uri() . '/stylesheets/styles.css');

	wp_enqueue_script( 'lakechelanwinevalley-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'lakechelanwinevalley-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lakechelanwinevalley_scripts' );

function homepage_fontawesome() {
  wp_enqueue_style( 'lakechelanwinevalley-fonts', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
}

add_action( 'wp_enqueue_scripts', 'homepage_fontawesome' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';



/*
*  Create acf menu
*/
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
	acf_add_options_sub_page('General');
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');
	
}

/*
* Custom Winery post type
*/

add_action( 'init', 'create_wineries' );
function create_wineries() {
  register_post_type( 'wineries',
    array(
      'labels' => array(
        'name' => __( 'Wineries' ),
        'singular_name' => __( 'Winery' )
      ),
      'supports' => array( 
      'title', 
      'editor',  
      'thumbnail' 
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'wineries'),
    )
  );
}

/*
* Custom Wine maker post type
*/

add_action( 'init', 'create_winemakers' );
function create_winemakers() {
  register_post_type( 'winemaker',
    array(
      'labels' => array(
        'name' => __( 'Winemakers' ),
        'singular_name' => __( 'Winemaker' )
      ),
      'supports' => array( 
      'title', 
      'editor',  
      'thumbnail'
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'winemakers'),
    )
  );
}

/*
* Custom articles post type
*/

add_action( 'init', 'create_articles' );
function create_articles() {
  register_post_type( 'articles',
    array(
      'labels' => array(
        'name' => __( 'Articles' ),
        'singular_name' => __( 'Article' )
      ),
      'supports' => array( 
      'title', 
      'editor',  
      'thumbnail',
      'excerpt',
      'revisions'
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'articles'),
    )
  );
}

/*
* Custom events post type
*/

add_action( 'init', 'create_events' );
function create_events() {
  register_post_type( 'events',
    array(
      'labels' => array(
        'name' => __( 'Events' ),
        'singular_name' => __( 'Event' )
      ),
      'supports' => array( 
      'title', 
      'editor',
      'excerpt',
      'revisions',
      'thumbnail' 
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'events'),
    )
  );
}

/*
* stripping tags and length for exerpt
*/
function custom_echo($x, $length)
			{
			  if(strlen($x)<=$length)
			  {
			    echo strip_tags($x);
			  }
			  else
			  {
			    $y=substr($x,0,$length) . '...';
			    echo strip_tags($y);
			  }
}

/*
* Random post desiplay for home page
*/
function random_homepost() { ?>
	<div class="rand">
		<ul>
		<?php $args = array( 'post_type' => 'wineries', 'orderby' => 'rand', 'posts_per_page' => 2);
			
		$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post );
			 ?>
			<li>	
				<span class="post_thumbnail"><a href="<?php echo $post->guid; ?>"><?php echo get_the_post_thumbnail($post->ID); ?></a></span>
				<span class="post_title"><h3><a href="<?php echo $post->guid; ?>"><?php echo $post->post_title; ?></a></h3></span>
				<span class="post_content"><?php custom_echo($post->post_content, 250); ?></span>
			</li>
			<?php endforeach; 
		wp_reset_postdata();?>

		</ul>
	</div>
<?php }
add_shortcode('random_wineries', 'random_homepost');

/*
* Random news post display for home page
*/
function latest_newspost() {
	$args = array( 'post_type' => 'articles', 'posts_per_page' => 1);
		$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post );
			 ?>
			 <div class="news_article">
				<span class="news_thumbnail"><a href="<?php echo $post->guid; ?>"><?php echo get_the_post_thumbnail($post->ID); ?></a></span>
				<span class="news_title"><h3><a href="<?php echo $post->guid; ?>"><?php echo $post->post_title; ?></a></h3></span>
				<span class="news_content"><?php custom_echo($post->post_content, 250); ?></span>
			</div>
			<?php 
			endforeach; 
		wp_reset_postdata();
	}
add_shortcode('latest_newspost', 'latest_newspost');


/*
* Creating events shortcode
*/
function latest_events() {
	$args = array( 'post_type' => 'events');
		$myposts = get_posts( $args );
			foreach ( $myposts as $post ) : setup_postdata( $post );
			
			 ?>
			 <div class="col-md-4 col-sm-6">
				<span class="col-md-6 img"><a href="<?php echo $post->guid; ?>"><?php echo get_the_post_thumbnail($post->ID, 'medium'); ?></a></span>
				<span class="col-md-6 title"><h3><a href="<?php echo $post->guid; ?>"><?php echo $post->post_title; ?></a></h3></span>
				<span class="col-md-6 date"><?php echo the_field('event_date', $post); ?></span>
				<span class="col-md-6 ex"><?php echo custom_echo($post->post_excerpt, 55); ?></span>
			</div>
			<?php 
			endforeach; 
		wp_reset_postdata();
	}
add_shortcode('latest_events', 'latest_events');


/* breadcrumb code */
function the_breadcrumb () {
     
    // Settings
    $separator  = '|';
    $id         = 'breadcrumbs';
    $class      = 'breadcrumbs';
    $home_title = 'Home';
     
    // Get the query & post information
    global $post,$wp_query;
    $category = get_the_category();
     
    // Build the breadcrums
    echo '<ul id="' . $id . '" class="' . $class . '">';
     
    // Do not display on the homepage
    if ( !is_front_page() ) {
         
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home">' . $separator . ' </li>';
         
        if ( is_single() ) {
             
            // Single post (Only display the first category)
            // echo '<li class="item-cat item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><a class="bread-cat bread-cat-' . $category[0]->term_id . ' bread-cat-' . $category[0]->category_nicename . '" href="' . get_category_link($category[0]->term_id ) . '" title="' . $category[0]->cat_name . '">' . $category[0]->cat_name . '</a></li>';
            // echo '<li class="separator separator-' . $category[0]->term_id . '"> ' . $separator . ' </li>';
            echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
             
        } else if ( is_post_type_archive() ) {
            echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_post_type() . '">' . get_post_type() . '</strong></li>';
             

        } else if ( is_category() ) {
             
            // Category page
            echo '<li class="item-current item-cat-' . $category[0]->term_id . ' item-cat-' . $category[0]->category_nicename . '"><strong class="bread-current bread-cat-' . $category[0]->term_id . ' bread-cat-' . $category[0]->category_nicename . '">' . $category[0]->cat_name . '</strong></li>';
             
        } else if ( is_page() ) {
             
            // Standard page
            if( $post->post_parent ){
                 
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                 
                // Get parents in the right order
                $anc = array_reverse($anc);
                 
                // Parent page loop
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                 
                // Display parent pages
                echo $parents;
                 
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                 
            } else {
                 
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                 
            }
             
        } else if ( is_tag() ) {
             
            // Tag page
             
            // Get tag information
            $term_id = get_query_var('tag_id');
            $taxonomy = 'post_tag';
            $args ='include=' . $term_id;
            $terms = get_terms( $taxonomy, $args );
             
            // Display the tag name
            echo '<li class="item-current item-tag-' . $terms[0]->term_id . ' item-tag-' . $terms[0]->slug . '"><strong class="bread-current bread-tag-' . $terms[0]->term_id . ' bread-tag-' . $terms[0]->slug . '">' . $terms[0]->name . '</strong></li>';
         
        } elseif ( is_day() ) {
             
            // Day archive
             
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
             
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
             
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
             
        } else if ( is_month() ) {
             
            // Month Archive
             
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
             
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
             
        } else if ( is_year() ) {
             
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
             
        } else if ( is_author() ) {
             
            // Auhor archive
             
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
             
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
         
        } else if ( get_query_var('paged') ) {
             
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
             
        } else if ( is_search() ) {
         
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
         
        } elseif ( is_404() ) {
             
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
         
    }
     
    echo '</ul>';
     
}

function custom_ex() { ?>
  <div class="articles_custom">
    
    <?php $args = array( 'post_type' => 'articles', 'posts_per_page' => 10);
      
    $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : setup_postdata( $post );
       ?>
       <div class="row">
          <div class="col-md-3">
            <span class="post_thumbnail"><a href="<?php echo $post->guid; ?>"><?php echo get_the_post_thumbnail($post->ID); ?></a></span>
          </div>
          <div class="col-md-9">
            <span class="post_title"><h3><a href="<?php echo $post->guid; ?>"><?php echo $post->post_title; ?></a></h3></span>
            <span class="post_content"><?php custom_echo($post->post_content, 450); ?></span>
            <button onclick="window.location='<?php echo $post->guid; ?>'">Read More</button>
          </div>
        </div>
      <?php endforeach; 
    wp_reset_postdata();?>

  </div>
<?php } ?>
