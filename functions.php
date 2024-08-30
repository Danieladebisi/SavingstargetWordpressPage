<?php

// Register navigation menu
function savingstarget_register_menus() {
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'savingstarget')
    ));
}
add_action('init', 'savingstarget_register_menus');

// Enqueue styles and scripts
function savingstarget_enqueue_scripts() {
    wp_enqueue_style('savingstarget-style', get_stylesheet_uri());
    wp_enqueue_script('navigation-toggle', get_template_directory_uri() . '/js/navigation-toggle.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'savingstarget_enqueue_scripts');

// Disable sidebar
function savingstarget_remove_sidebar() {
    unregister_sidebar('sidebar-1');
}
add_action('widgets_init', 'savingstarget_remove_sidebar');

// Optimize WordPress performance
function savingstarget_optimize() {
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_shortlink_wp_head');
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
    remove_action('wp_head', 'rel_canonical');
    remove_action('wp_head', 'wp_resource_hints', 2);
}
add_action('after_setup_theme', 'savingstarget_optimize');

// Add theme support for title tag
add_theme_support('title-tag');
