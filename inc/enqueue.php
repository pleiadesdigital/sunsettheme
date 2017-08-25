<?php

/*======================================
  ADMIN ENQUEUE FUNCTIONS
========================================*/
// Register Custom CSS
function sunset_load_admin_scripts($hook) {
  if ('toplevel_page_alecaddd_sunset' != $hook) {
    return;
  } else {
    wp_register_style('sunset_admin', get_template_directory_uri() . '/css/sunset.admin.css', array(), '1.0.0', 'all');
    wp_enqueue_style('sunset_admin');
  }

} //sunset_load_admin_scripts()
add_action('admin_enqueue_scripts', 'sunset_load_admin_scripts');










