<?php

/*======================================
  ADMIN ENQUEUE FUNCTIONS
========================================*/
// Register Custom CSS

function sunset_load_admin_scripts($hook) {
  // echo $hook;
  if ('toplevel_page_alecaddd_sunset' != $hook) { return; }

  wp_register_style('sunset_admin', get_template_directory_uri() . '/css/sunset.admin.css', array(), '1.0.0', 'all');
  wp_enqueue_style('sunset_admin');

  wp_enqueue_media();

  wp_register_script('sunset-admin-script', get_template_directory_uri() . '/js/sunset.admin.js', array('jquery'), '1.0.0', true);
  wp_enqueue_script('sunset-admin-script');

} //sunset_load_admin_scripts()
add_action('admin_enqueue_scripts', 'sunset_load_admin_scripts');


/*======================================
  FRONT END ENQUEUE FUNCTIONS
========================================*/

function sunset_load_scripts() {

  wp_enqueue_style('raleway', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Raleway:300,400,600' );

}
add_action('wp_enqueue_scripts', 'sunset_load_scripts');






