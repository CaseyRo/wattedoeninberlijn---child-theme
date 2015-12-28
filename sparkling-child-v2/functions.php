<?php
// Add your custom functions here


add_image_size('yarpp-thumbnail', 120, 120, true);
add_image_size('mailchimp', 600, 300, true);
add_image_size('article', 648);
add_image_size('huge', 2048,2048,true);

update_option('medium_crop', 0);
add_filter('excerpt_length', 'my_excerpt_length');
add_filter( 'jpeg_quality', create_function( '', 'return 90;' ) );
add_filter('widget_text', 'do_shortcode');
add_filter( 'image_size_names_choose', 'my_insert_custom_image_sizes' );

/* Disable WordPress Admin Bar for all users but admins. */

 // show_admin_bar(false);

function my_insert_custom_image_sizes( $sizes ) {
  global $_wp_additional_image_sizes;
  if ( empty($_wp_additional_image_sizes) )
    return $sizes;

  foreach ( $_wp_additional_image_sizes as $id => $data ) {
    if ( !isset($sizes[$id]) )
      $sizes[$id] = ucfirst( str_replace( '-', ' ', $id ) );
  }

  return $sizes;
}


function my_excerpt_length($length) {
return 100; }

function sparkling_header_menu() {
        // display the WordPress Custom Menu if available
        wp_nav_menu(array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 3,  //  <--- This is the value you change from 2 -> 3
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker()
        ));
} /* end header menu */



?>