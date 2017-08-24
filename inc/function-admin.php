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
  // FULL NAME
  register_setting('sunset-settings-group', 'first_name');
  register_setting('sunset-settings-group', 'last_name');
  // SOCIAL MEDIA HANDLERS
  register_setting('sunset-settings-group', 'twitter_handler', 'sunset_sanitize_twitter_handler');
  register_setting('sunset-settings-group', 'facebook_handler');
  register_setting('sunset-settings-group', 'gplus_handler');

  add_settings_section('sunset-sidebar-options', 'Sidebar Options', 'sunset_sidebar_options', 'alecaddd_sunset');
  add_settings_field('sidebar-name', 'Full Name', 'sunset_sidebar_name', 'alecaddd_sunset', 'sunset-sidebar-options');
  // Social media handlers
  add_settings_field('sidebar-twitter', 'Twitter handler', 'sunset_sidebar_twitter', 'alecaddd_sunset', 'sunset-sidebar-options');
  add_settings_field('sidebar-facebook', 'Facebook handler', 'sunset_sidebar_facebook', 'alecaddd_sunset', 'sunset-sidebar-options');
  add_settings_field('sidebar-gplus', 'GPlus handler', 'sunset_sidebar_gplus', 'alecaddd_sunset', 'sunset-sidebar-options');

} //sunset_custom_settings()

// callback for add_settings_section
function sunset_sidebar_options() {
  echo 'Customize your sidebar information';
}

// callback add_settings_field Full Name
function sunset_sidebar_name() {
  $firstName = esc_attr(get_option('first_name'));
  $lastName = esc_attr(get_option('last_name'));
  echo '<input type="text" name="first_name" value="' . $firstName . '" placeholder="First name"> <input type="text" name="last_name" value="' . $lastName . '" placeholder="Last name">';
}

// callback add_settings_field Twitter handler
function sunset_sidebar_twitter() {
  $twitter = esc_attr(get_option('twitter_handler'));
  echo '<input type="text" name="twitter_handler" value="' . $twitter . '" placeholder="Twitter handler"><p class="description">Input your Twitter username without the @ character.</p>';
}
// callback add_settings_field Facebook handler
function sunset_sidebar_facebook() {
  $facebook = esc_attr(get_option('facebook_handler'));
  echo '<input type="text" name="facebook_handler" value="' . $facebook . '" placeholder="Facebook handler">';
}
// callback add_settings_field Google+ handler
function sunset_sidebar_gplus() {
  $gplus = esc_attr(get_option('gplus_handler'));
  echo '<input type="text" name="gplus_handler" value="' . $gplus . '" placeholder="Google+ handler">';
}

// Sanitization settings
function sunset_sanitize_twitter_handler($input) {
  $output = sanitize_text_field($input);
  $output = str_replace('@', '', $output);
  return $output;
}



// callback function for Generate Admin Page
function sunset_theme_create_page() {
  require_once(get_template_directory() . '/inc/templates/sunset-admin.php');
}

// callback function for Generate Admin Subpages
function sunset_theme_settings_page() {
  // generation of our admin sub pages
}























