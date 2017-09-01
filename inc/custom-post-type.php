<?php

/*======================================
  THEME CUSTOM POST TYPES
========================================*/


/* CUSTOM HEADER */
$contact = get_option('activate_contact');
if (isset($contact) && $contact == 1) {
  add_action('init', 'sunset_contact_custom_post_type');
}


/* Contact CPT */
function sunset_contact_custom_post_type() {
  $labels = array(
    'name'               => 'Messages',
    'singular_name'      => 'Message',
    'menu_name'          => 'Messages',
    'name'               => 'Message',
  );
  $args = array(
    'labels'            => $labels,
    'show_ui'           => true,
    'show_in_meny'      => true,
    'capability_type'   => 'post',
    'hierarchical'      => false,
    'menu_position'     => 26,
    'menu_icon'         => 'dashicons-welcome-write-blog',
    'supports'          => array('title', 'editor', 'author'),
  );

  register_post_type('sunset-contact', $args);
}





