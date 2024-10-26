<?php
// Theme setup
function streamlab_theme_setup() {
    // Add support for title tag
    add_theme_support( 'title-tag' );

    // Add support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'streamlab' ),
    ) );
}
add_action( 'after_setup_theme', 'streamlab_theme_setup' );

// Enqueue styles and scripts
function streamlab_enqueue_scripts() {
    // Enqueue CSS styles
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/css/custom.css' );

    // Enqueue JavaScript files
    wp_enqueue_script( 'jquery' );  // Ensures jQuery is loaded
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'streamlab_enqueue_scripts' );

// Register widget area
function streamlab_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'streamlab' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'streamlab' ),
        'before_widget' => '<section class="widget">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'streamlab_widgets_init' );

// Register custom navigation walker for Bootstrap
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
?>
