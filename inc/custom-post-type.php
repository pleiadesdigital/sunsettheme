<?php

/*======================================
  THEME CUSTOM POST TYPES
========================================*/


/* CUSTOM HEADER */
$contact = get_option('activate_contact');
if (isset($contact) && $contact == 1) {
  add_action('init', 'sunset_contact_custom_post_type');

  // Activate the filter
  add_filter('manage_sunset-contact_posts_columns', 'sunset_set_contact_columns');
  add_action('manage_sunset-contact_posts_custom_column', 'sunset_contact_custom_column', 10, 2);

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


// callback functions
function sunset_set_contact_columns($columns) {
  $new_columns = array(
    'title' => 'Full Name',
    'message' => 'Message',
    'email' => 'Email',
    'date'  => 'Date',
  );
  return $new_columns;
}

function sunset_contact_custom_column($column, $post_id ) {
  switch ($column) {
    case 'message':
      echo get_the_excerpt();
      break;

    case 'email':
      echo 'email address';
      break;

    default:
      # code...
      break;
  }
}








































