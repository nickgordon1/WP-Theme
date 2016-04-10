<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WP-Theme</title>
    <?php wp_head(); ?>
  </head>
  
  <?php
  
    if( is_front_page() ):
      $wp_classes = array( 'wp-class', 'my-class' );
    else:
      $wp_classes = array( 'no-wp-class' );
    endif;
  
  ?>
  
  <body <?php body_class( $wp_classes ); ?>>

      <?php wp_nav_menu(array('theme_location'=>'primary')); ?>