<?php 
/**
 * IAMSocial functions and definitions
 *
 * @package WordPress
 * @subpackage IAMSocial
 * @since IAMSocial 0.1
 */

/*
 * Add support for a custom IAMSocial Settings.
 */

include_once( 'admin/iamsocial-admin-functions.php' );
include_once( 'admin/iamsocial-customizer.php' );
include_once( 'admin/iamsocial-sanitize.php' );

/*
 * Register Custom Navigation Walker for bootstrap Menu
 */
require_once( 'wp_bootstrap_navwalker.php' );

/*
 * Enqueue scripts for the front end.
 */
function iamsocial_scripts() {
	wp_enqueue_style( 'style.css',  get_template_directory_uri().'/css/style.css', array() , '1.0.8' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.0.8', true );
}
add_action( 'wp_enqueue_scripts', 'iamsocial_scripts' );

/*
 * Enqueue scripts for comments.
 */
function iamsocial_enqueue_comment_reply() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'iamsocial_enqueue_comment_reply' );

/*
 * IAMSocial setup.
 */
add_action( 'after_setup_theme', 'iamsocial_setup' );
function iamsocial_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	register_nav_menus(array(
		'primary' => __( 'Primary Menu', 'iamsocial' ),
		'footer-menu-left' => __( 'Footer Menu Left', 'iamsocial' ),
		'footer-menu-right' => __( 'Footer Menu Right', 'iamsocial' ),
		'footer-menu-middle' => __( 'Footer Menu Center', 'iamsocial' ),
	) );
}

/*
 * Set up the content width value based on the theme's design.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 656;
}
function iamsocial_adjust_content_width() {
	global $content_width;

	if ( is_page_template( 'category.php' ) || is_page_template( 'archive.php' ) || is_page_template( 'tags.php' ) ) {
		$content_width = 303;
	} elseif ( is_page_template( 'front-page.php' ) || is_page_template( 'search.php' ) ) {
		$content_width = 265;
	}
}
add_action( 'template_redirect', 'iamsocial_adjust_content_width' );


/**
 * Register widget areas.
 */
//General right Sidebar
function iamsocial_sidebar_widgets_init() {
	$args_sidebar = array(
		'name' => __( 'Sidebar','iamsocial' ),
		'id' => 'sidebar',
		'description' => __( 'Add widgets here and these will appear on the side of any default page or post. Ideal for listing pages, archives or recent posts.','iamsocial' ),
		'before_widget' => '<div class="sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	);
	register_sidebar( $args_sidebar );
}
add_action( 'widgets_init', 'iamsocial_sidebar_widgets_init' );

//Sidebar for top menu (i.e: perfect place for search bar widget)
function iamsocial_top_bar_widgets_init() {
	$args_sidebar = array(
		'name' => __( 'Top bar widgets','iamsocial' ),
		'id' => 'top-bar',
		'description' => __( 'Add widgets here. Recommended: Search bar or Custom menu. Note: It is recommended to use only one widget in this area. If this widget area is empty, by default, the search bar is shown.','iamsocial' ),
		'before_widget' => '<div class="sidebar-top">',
		'after_widget' => '</div>',
		'before_title' => '<small>',
		'after_title' => '</small>',
	);
	register_sidebar( $args_sidebar );
}
add_action( 'widgets_init', 'iamsocial_top_bar_widgets_init' );

//Sidebar footer LEFT
function iamsocial_footer_left_widgets_init() {
	$args_footer_left = array(
		'name' => __( 'Footer widgets left','iamsocial' ),
		'id' => 'footer-left',
		'description' => __( 'Use this widget area to customize your left footer','iamsocial' ),
		'before_widget' => '<div class="sidebar-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	);
	register_sidebar( $args_footer_left );
}
add_action( 'widgets_init', 'iamsocial_footer_left_widgets_init' );

//Sidebar footer MIDDLE
function iamsocial_footer_middle_widgets_init() {
	$args_footer_middle = array(
		'name' => __( 'Footer widgets middle','iamsocial' ),
		'id' => 'footer-middle',
		'description' => __( 'Use this widget area to customize your middle footer','iamsocial' ),
		'before_widget' => '<div class="sidebar-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	);
	register_sidebar( $args_footer_middle );
}
add_action( 'widgets_init', 'iamsocial_footer_middle_widgets_init' );

//Sidebar footer RIGHT
function iamsocial_footer_right_widgets_init() {
	$args_footer_right = array(
		'name' => __( 'Footer widgets right','iamsocial' ),
		'id' => 'footer-right',
		'description' => __( 'Use this widget area to customize your right footer','iamsocial' ),
		'before_widget' => '<div class="sidebar-footer">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	);
	register_sidebar( $args_footer_right );
}
add_action( 'widgets_init', 'iamsocial_footer_right_widgets_init' );
?>
