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

  // Activate custom settings
  add_action('admin_init', 'sunset_custom_settings');


} //sunset_add_admin_page()
add_action('admin_menu', 'sunset_add_admin_page');

// create custom settings / record on the database
function sunset_custom_settings() {
  register_setting('sunset-settings-group', 'first_name');
  add_settings_section('sunset-sidebar-options', 'Sidebar Options', 'sunset_sidebar_options', 'alecaddd_sunset');
  add_settings_field('sidebar-name', 'First Name', 'sunset_sidebar_name', 'alecaddd_sunset', 'sunset-sidebar-options');
}

// callback for add_settings_section
function sunset_sidebar_options() {
  echo 'Customize your sidebar information';
}

// callback add_settings_field
function sunset_sidebar_name() {
  $firstName = esc_attr(get_option('first_name'));
  echo '<input type="text" name="first_name" value="' . $firstName . '" placeholder="First name">';
}

// callback function for Generate Admin Page
function sunset_theme_create_page() {
  require_once(get_template_directory() . '/inc/templates/sunset-admin.php');
}

// callback function for Generate Admin Subpages
function sunset_theme_settings_page() {
  // generation of our admin sub pages
}

