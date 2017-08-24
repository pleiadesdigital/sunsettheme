<?php

/*======================================
  ADMIN PAGE
========================================*/

function sunset_add_admin_page() {

  // Generate Sunset Admin Page
  add_menu_page('Sunset Theme Options', 'Sunset', 'manage_options', 'alecaddd_sunset', 'sunset_theme_create_page', 'dashicons-nametag', 26);

  // Generate Sunset Admin Sub Pages
  add_submenu_page('alecaddd_sunset', 'Sunset Theme Options', 'Settings', 'manage_options', 'alecaddd_sunset', 'sunset_theme_create_page');
  add_submenu_page('alecaddd_sunset', 'Sunset CSS Options', 'Custom CSS', 'manage_options', 'alecaddd_sunset_css', 'sunset_theme_settings_page');


} //sunset_add_admin_page()
add_action('admin_menu', 'sunset_add_admin_page');

// callback function for Generate Admin Page
function sunset_theme_create_page() {
  require_once(get_template_directory() . '/inc/templates/sunset-admin.php');
}

// callback function for Generate Admin Subpages
function sunset_theme_settings_page() {
  // generation of our admin sub pages
}

