<?php
function savingstarget_theme_setup() {
    // Add support for featured images
    add_theme_support( 'post-thumbnails' );

    // Register primary menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'savingstarget' ),
    ) );
}
add_action( 'after_setup_theme', 'savingstarget_theme_setup' );

function savingstarget_enqueue_styles() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'savingstarget_enqueue_styles' );

// Register sidebar
function savingstarget_widgets_init() {
    register_sidebar( array(
        'name'          => 'Main Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'savingstarget_widgets_init' );
