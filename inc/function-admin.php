<?php

/*======================================
  ADMIN PAGE
========================================*/

function sunset_add_admin_page() {

  add_menu_page('Sunset Theme Options', 'Sunset', 'manage_options', 'alecaddd-sunset', 'sunset_theme_create_page', 'dashicons-nametag', 26);

}
add_action('admin_menu', 'sunset_add_admin_page');


function sunset_theme_create_page() {
  // generation of our admin pages
}