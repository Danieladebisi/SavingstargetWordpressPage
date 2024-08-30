<?php
function savingstarget_theme_setup() {
    // Add support for featured images
    add_theme_support( 'post-thumbnails' );
    
    // Add support for custom logo
    add_theme_support( 'custom-logo' );

    // Add support for custom background
    add_theme_support( 'custom-background' );

    // Add support for custom header
    add_theme_support( 'custom-header' );

    // Register primary menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'savingstarget' ),
    ) );

    // Add support for title tag
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'savingstarget_theme_setup' );

function savingstarget_enqueue_styles() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // Enqueue Google Fonts
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap', false );

    // Enqueue scripts for navigation toggle
    wp_enqueue_script( 'navigation-toggle', get_template_directory_uri() . '/js/navigation-toggle.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'savingstarget_enqueue_styles' );

// Register sidebar widget areas
function savingstarget_widgets_init() {
    register_sidebar( array(
        'name'          => 'Main Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => 'Header Widgets',
        'id'            => 'header-widgets',
        'before_widget' => '<div class="header-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'savingstarget_widgets_init' );
