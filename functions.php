<?php
// Theme setup
function savingstarget_theme_setup() {
    // Enable support for title tag
    add_theme_support( 'title-tag' );

    // Enable support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Register primary menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'savingstarget' ),
    ) );

    // Add support for HTML5 markup
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    // Remove sidebar widget support
    unregister_sidebar( 'sidebar-1' );
}
add_action( 'after_setup_theme', 'savingstarget_theme_setup' );

// Enqueue styles and scripts
function savingstarget_enqueue_styles() {
    wp_enqueue_style( 'savingstarget-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'savingstarget_enqueue_styles' );
?>
