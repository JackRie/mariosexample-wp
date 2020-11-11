<?php

// adding the css and js files
function gt_setup() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Lobster&family=Raleway:wght@400;600&display=swap');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.15.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'gt_setup');

// WP nav menus
function register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Main Menu' ),
        'mobile-menu' => __( 'Mobile Menu' )
      )
    );
  }
  add_action( 'init', 'register_my_menus' );

// Include walker class file
require get_template_directory() . '/inc/walker.php';

// adding theme support
add_theme_support( 'align-wide' );
add_theme_support( 'wp-block-styles' );
add_theme_support( 'editor-styles' );