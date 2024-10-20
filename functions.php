<?php
// Theme setup
function streamlabNew_theme_setup() {
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
    wp_enqueue_style( 'main-style', get_stylesheet_uri
