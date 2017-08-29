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