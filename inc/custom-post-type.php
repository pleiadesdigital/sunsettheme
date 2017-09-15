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

  // Activate hook for the Meta Box
  add_action('add_meta_boxes', 'sunset_contact_add_meta_box');
  add_action('save_post', 'sunset_save_contact_email_data');

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
      $email = get_post_meta($post_id, '_contact_email_value_key', true);
      echo '<a href="mailto:' . $email. '">' . $email . '</a>';
      break;

    default:
      # code...
      break;
  }
}

/* CONTACT META BOXES */
function sunset_contact_add_meta_box() {
  add_meta_box('contact_email', 'User Email', 'sunset_contact_email_callback', 'sunset-contact', 'side', 'default');
}
// callback function
function sunset_contact_email_callback($post) {
  wp_nonce_field('sunset_save_contact_email_data', 'sunset_contact_email_meta_box_nonce'); //wp_nonce_field generates a unique id etc...

  $value = get_post_meta($post->ID, '_contact_email_value_key', true);

  echo '<label for="sunset_contact_email_field">User Email Address: </label>';
  echo '<input type="email" id="sunset_contact_email_field" name="sunset_contact_email_field" value="' . esc_attr($value) . '" size="25">';
}


// Set up a function to save the content of the meta box
function sunset_save_contact_email_data($post_id) {

  if (!isset($_POST['sunset_contact_email_meta_box_nonce'])) {
    return;
  }

  if (!wp_verify_nonce($_POST['sunset_contact_email_meta_box_nonce'], 'sunset_save_contact_email_data')) {
    return;
  }

  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!current_user_can('edit_post', $post_id)) {
    return;
  }

  if (!isset($_POST['sunset_contact_email_field'])) {
    return;
  }

  $my_data = sanitize_text_field($_POST['sunset_contact_email_field']);
  update_post_meta($post_id, '_contact_email_value_key', $my_data);

}













































