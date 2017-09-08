<?php

/********************************************************
****************** THEME SUPPORTS *********************
********************************************************/





/********************************************************
****************** STYLES & SCRIPTS *********************
********************************************************/
function sunset_scripts() {
  // MAIN CSS style.css
  wp_enqueue_style('sunsetmaincss', get_stylesheet_uri());

  // FONTAWESOME
  wp_enqueue_script('pleiades17-fontawesome', 'https://use.fontawesome.com/b1403a6995.js', array(), '20170109', true);
}
add_action('wp_head', 'sunset_scripts');


// INCLUDES
require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/custom-post-type.php';
