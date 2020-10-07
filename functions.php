<?php
// adding the css and js files

function gt_setup() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Lobster&family=Raleway:wght@400;600&display=swap');
    wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.15.0/css/all.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), 'all');
    wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'gt_setup');



