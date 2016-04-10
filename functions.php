<?php

function wptheme_script_enqueue () {
  
  wp_enqueue_style('customstyle', get_template_directory_uri() . 'css/style.css', array() , '1.0.0', 'all');
  wp_enqueue_script('customjs', get_template_directory_uri() . 'js/wptheme.js', array(), '1.0.0', true);
    
}

add_action('wp_enqueue_scripts', 'wptheme_script_enqueue');

function wptheme_theme_setup(){
  
  add_theme_support('menus');
  
  register_nav_menu('primary', 'Primary Header Navigation');
  register_nav_menu('secondary', 'Footer Navigation');

}

add_action('init', 'wptheme_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');