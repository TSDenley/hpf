<?php
/**
 * hpf functions and definitions
 *
 * @package hpf
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'hpf_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function hpf_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 */
	load_theme_textdomain( 'hpf', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'page_width', 960, 9999);
	add_image_size( 'portfolio-thumb', 316, 200, true);
	add_image_size( 'portfolio-thumb-480', 480, 480, true);

	add_filter( 'image_size_names_choose', 'my_custom_sizes' );
	function my_custom_sizes( $sizes ) {
	    return array_merge( $sizes, array(
	        'page_width' => __('Page width')
	    ) );
	}


	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'hpf' ),
	) );

}
endif; // hpf_setup
add_action( 'after_setup_theme', 'hpf_setup' );


/**
 * Register custom post types
 */
function cptui_register_my_cpt_portfolio() {

	register_post_type('portfolio', array(
		'label' => 'Projects',
		'description' => 'Portfolio projects',
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => true,
		'rewrite' => array('slug' => 'portfolio', 'with_front' => true),
		'query_var' => true,
		'has_archive' => true,
		'menu_position' => '5',
		'supports' => array('title','editor','revisions','thumbnail'),
		'taxonomies' => array('category','post_tag'),
		'labels' => array (
			'name' => 'Projects',
			'singular_name' => 'Project',
			'menu_name' => 'Projects',
			'add_new' => 'Add Project',
			'add_new_item' => 'Add New Project',
			'edit' => 'Edit',
			'edit_item' => 'Edit Project',
			'new_item' => 'New Project',
			'view' => 'View Project',
			'view_item' => 'View Project',
			'search_items' => 'Search Projects',
			'not_found' => 'No Projects Found',
			'not_found_in_trash' => 'No Projects Found in Trash',
			'parent' => 'Parent Project',
		)
	));

}
add_action('init', 'cptui_register_my_cpt_portfolio');


/**
 * Register widgetized area and update sidebar with default widgets
 */
function hpf_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Widget Area', 'hpf' ),
		'id'            => 'footer_widget_area',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'hpf_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function hpf_scripts() {
	wp_enqueue_style( 'hpf-style', get_stylesheet_uri() );

	wp_enqueue_script( 'hpf-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'hpf-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery'), '1.0', true );

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'hpf-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'hpf_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
