<?php

/*======================================
  THEME SUPPORT
========================================*/

/* POST FORMATS */
$options = get_option('post_formats');
$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
$output = array();
foreach ($formats as $format) {
  $output[] = (isset($options[$format]) && $options[$format] == 1 ? $format : "");

} //end foreach

if (!empty($output)) {
  add_theme_support('post-formats', $output);
}

/* CUSTOM HEADER */
$header = get_option('custom_header');
if (isset($header) && $header == 1) {
  add_theme_support('custom-header');
}

/* CUSTOM BACKGROUND */
$background = get_option('custom_background');
if (isset($background) && $background == 1) {
  add_theme_support('custom-background');
}

// POST THUMBNAIL
add_theme_support('post-thumbnails');

/* MAIN NAVIGATION */

function sunset_register_nav_menu() {
  register_nav_menu('primary', 'Top header navigation');
}
add_action('after_setup_theme', 'sunset_register_nav_menu');


/*======================================
  BLOG LOOP CUSTOM FUNCTIONS
========================================*/
function sunset_posted_meta() {
  $posted_on = human_time_diff(get_the_time('U'), current_time('timestamp'));
  $categories = get_the_category();
  $separator = ', ';
  $output = '';
  $i = 1;

  if (!empty($categories)) :
    foreach ($categories as $category) :
      if ($i > 1) : $output .= $separator; endif;
      $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '" alt="' . esc_attr('View all posts in %s', $category->name) . '">' . esc_html($category->name) . '</a>';
      $i++;
    endforeach;
  endif;

  return '<span class="posted-on">Posted <a href="' . esc_url(get_permalink()) . '">' . $posted_on . '</a> ago</span> / <span class="posted-in">' . $output . '</span>';
}

function sunset_posted_footer() {

  $comments_num = get_comments_number();
  if (comments_open()) {
    if ($comments_num == 0) {
      $comments = __('No Comments');
    } elseif ($comments_num > 1) {
      $comments = $comments_num . __(' Comments');
    } else {
      $comments = __('1 Comment');
    }
    $comments = '<a href="' . get_comments_link() . '">' . $comments . ' <i class="fa fa-commenting" aria-hidden="true"></i></a>';
  } else {
    $comments = __('Comments are closed ');
  }

  return '<div class="post-footer-container"><div class="footer-tags">' . get_the_tag_list('<div class="tags-list"><i class="fa fa-tag" aria-hidden="true"></i>', ' ' , '</div>') . '</div><div class="footer-comments">' . $comments . '</div></div>';
}


// Attachment function for IMAGE Post Format
function sunset_get_attachment($num = 1) {
  $output = '';
    if (has_post_thumbnail() && $num == 1) :
      $output = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
    else :
      $attachments = get_posts(array(
        'post_type'         => 'attachment',
        'posts_per_page'    => $num,
        'post_parent'       => get_the_ID()
      ));
      if ($attachments && $num == 1) {
        foreach ($attachments as $attachment) {
          $output = wp_get_attachment_url($attachment->ID);
        } //endforeach
      } elseif ($attachments && $num > 1) {
        $output = $attachments;
      } //endif
      wp_reset_postdata();
    endif;
  return $output;
}

// Audio / Video media attachment
function sunset_get_embedded_media($type = array()) {
  $content = do_shortcode(apply_filters('the_content', get_the_content()));
  $embed = get_media_embedded_in_content($content, $type);
  if (in_array('audio', $type)) {
    $output = str_replace('?visual=true', '?visual=false', $embed[0]);
  } else {
    $output = $embed[0];
  }
  return $output;
}
























