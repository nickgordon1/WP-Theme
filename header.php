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
    
      <div class="container">
        <div class="row">
          <div class="col--xs-12">
            
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">WP-Theme</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <?php
                    wp_nav_menu(array(
                      'theme_location'=>'primary',
                      'container'=>false,
                      'menu_class' => 'nav navbar-nav navbar-right'                   
                    )
                   ); 
                  ?>
                </div>
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      
    
      <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt=""/>