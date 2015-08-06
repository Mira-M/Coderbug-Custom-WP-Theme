<?php
/**
 * coderbug functions and definitions
 *
 * @package coderbug
 */

if ( ! function_exists( 'coderbug_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

// Include the Redux theme options Framework
if ( !class_exists( 'ReduxFramework' ) ) {
	require_once( get_template_directory() . '/redux/framework.php' );
}

// Register all the theme options
require_once( get_template_directory() . '/inc/redux-config.php' );

// Theme options functions
require_once( get_template_directory() . '/inc/coderbug-options.php' );

function coderbug_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on coderbug, use a find and replace
	 * to change 'coderbug' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'coderbug', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary Menu', 'coderbug' ),
	) );

	register_nav_menus( array(
		'footer-menu' => esc_html__( 'Footer Menu', 'coderbug' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'coderbug_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // coderbug_setup
add_action( 'after_setup_theme', 'coderbug_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function coderbug_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'coderbug_content_width', 640 );
}
add_action( 'after_setup_theme', 'coderbug_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function coderbug_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'coderbug' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar Left', 'coderbug' ),
		'id'            => 'sidebar-left',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

		register_sidebar( array(
		'name'          => __( 'Home 1', 'coderbug' ),
		'id'            => 'home-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Home 2', 'coderbug' ),
		'id'            => 'home-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Home 3', 'coderbug' ),
		'id'            => 'home-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

		register_sidebar( array(
		'name'          => __( 'Footer 1', 'coderbug' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

			register_sidebar( array(
		'name'          => __( 'Footer 2', 'coderbug' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'coderbug' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

		register_sidebar( array(
		'name'          => __( 'Contact', 'coderbug' ),
		'id'            => 'contact',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

/**
 * Porfolio Widgets
 */
	register_sidebar( array(
		'name'          => __( 'Portfolio 1', 'coderbug' ),
		'id'            => 'porfolio-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Portfolio 2', 'coderbug' ),
		'id'            => 'porfolio-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Portfolio 3', 'coderbug' ),
		'id'            => 'porfolio-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Portfolio 4', 'coderbug' ),
		'id'            => 'porfolio-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Portfolio 5', 'coderbug' ),
		'id'            => 'porfolio-5',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Portfolio 6', 'coderbug' ),
		'id'            => 'porfolio-6',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'coderbug_widgets_init' );
/**
 * Enqueue scripts and styles.
 */
function coderbug_scripts() {
	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/'. coderbug_option('css_style', 'bootstrap.min.css'), array(), '3.3.0', 'all' );

	wp_enqueue_style( 'bootstrap-styles', get_template_directory_uri() . '/css/bootstrap.min.css' , array(), '3.3.4', 'all');

	wp_enqueue_style( 'google-body', '//fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic');

	wp_enqueue_style( 'google-resume', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');

	wp_enqueue_style( 'google-heading', '//fonts.googleapis.com/css?family=Fredericka+the+Great|Acme|Frijole|Monofett|Luckiest+Guy|Press+Start+2P');

	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' , array(), '4.3.0', 'all');

	wp_enqueue_style( 'animation', get_template_directory_uri() . '/css/animate-custom.css' , array(), '4.3.0', 'all');
	
	wp_enqueue_style( 'optimize', get_template_directory_uri() . '/css/optimize.css' , array(), '1.0.0', 'all');

	wp_enqueue_style( 'coderbug-style', get_stylesheet_uri() );

	//wp_enqueue_script( 'respond-js', get_template_directory_uri() . '/js/respond.min.js' , array('jquery'), '1.4.2', true);

	wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/js/modernizr.custom.js', array('jquery'), '2.6.2', false );

	wp_enqueue_script( 'boostrap-js', get_template_directory_uri() . '/js/bootstrap.min.js' , array('jquery'), '3.3.4', true);

	wp_enqueue_script( 'jquery-js', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), '1.11.0', false );

	wp_enqueue_script( 'scripts-js', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'html5shiv-js', get_template_directory_uri() . '/js/html5shiv.js', array('jquery'), '3.7.0', true );

	//wp_enqueue_script( 'retina-js', get_template_directory_uri() . '/js/retina.js', array('jquery'), '0.0.2', false );

	wp_enqueue_script( 'modernizr-js', get_template_directory_uri() . '/js/modernizr.custom.js', array('jquery'), '2.6.2', false );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );

	wp_enqueue_script( 'imagesloaded-js', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array('jquery'), '3.1.8', false );

	wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '2.2.0', false );

	wp_enqueue_script( 'coderbug-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'coderbug_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Load Bootstrap Menu.
 */
require get_template_directory() . '/inc/bootstrap-walker.php';

/**
 * Comments Callback.
 */
require get_template_directory() . '/inc/comments-callback.php';

/**
 * Author Meta.
 */
require get_template_directory() . '/inc/author-meta.php';

/**
 * Search Results - Highlight.
 */
require get_template_directory() . '/inc/search-highlight.php';

/**
 * Custom Post Types
 */
require get_template_directory() . '/inc/post-types/CPT.php';

//Portfolio Custom Post Type
require get_template_directory() . '/inc/post-types/register-portfolio.php';

/**
 * Theme Options - Custom CSS.
 */
require get_template_directory() . '/inc/custom-css.php';

/**
 * TGM - Plugin Manager
 */
require get_template_directory() . '/inc/plugin-activation.php';

/**
 * Meta-Box Plugin
 */
require get_template_directory() . '/inc/meta-box.php';