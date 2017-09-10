<?php /* Main Header */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php bloginfo('name'); wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php endif; ?>
  <?php wp_head();  ?>
</head>

<body <?php body_class(); ?>>
  <header class="main-header header-container">
    <div class="main-header-wrapper background-image" style="background-image: url(<?php header_image(); ?>);">
      <!-- HEADER CONTENT -->
      <div class="header-content">
        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
        <span class="sunset-logo">
          <svg version="1.1" class="zoom" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="-306 60 107 62" style="enable-background:new -306 60 107 62;" xml:space="preserve">
          <style type="text/css">
            .st0{fill:none;enable-background:new    ;}
          </style>
          <path class="st0" d="z"/>
          <path d="M-233.5,82c0-2.3-0.4-4.5-1.1-6.6c-2.8-8.3-10.6-14.3-19.9-14.3c-9.3,0-17.1,6-19.9,14.3c-0.3,1-0.6,2.1-0.8,3.2
            c-0.2,1.1-0.3,2.2-0.3,3.4c0.1,1.7,0,0.8,0.1,1.7c0,0.5-0.1,1,0.2,1.7c-1.6,0.1-1.8,0.1,1.8,0.2c8.4,0.1,1,0.1,3.3,0.2
            c12.5,0.1,0.3,0.3-3.5,0.4c-2.7,0.1,4.1,0.3-0.2,0.4c-1.3,0.1-4.6,0.3-1.2,0.4c11.4,0.1,9,0.3,4,0.4c2.4,0.1-4,0.3-4.3,0.4
            c-3.6,0.3-3.5,0.5,0.9,0.8c3,0.5-5.4,0.5,0.6,1c9.2,0.1-3.1,0.8-1.4,0.9c-2.9,0.1,4.6,0.1-0.6,0.2c2.6,0.1-4.4,0.1,4.3,0.2
            c-3.3,0.1-1,0.1,1.4,0.2c1.2,0,2.6,0.1,3.9,0.1c0.8,0,1.5,0,1,0c-1.1,0-2.8,0-3.3,0c-0.7,0.1-4.9,0.1-1.1,0.2c-3.8,0-11,0.1-6.1,0.1
            c-5.1,0,0.8,0.1,2.5,0.1c-0.5,0,2.5,0.1,1.8,0.1c-2.1,0,1.9,0.1,3,0.1c0.2,0,0.5,0,1.2,0c-0.6,0-0.9,0-0.4,0c0.5,0,1.6,0,3.9,0
            c12.8,0-2.1,0,2.5,0c-4.5,0-4.6,0-6.1,0c-0.8,0-0.7,0-1.5,0c-1,0-2.4,0-3.5,0c-2.2,0-3.4,0,1.5,0c-0.3,0,0.5,0,2,0
            c0.4,0,0.6,0,2.9,0c-0.1,0,5.5,0,3.3,0c-3.6,0,1.2,0-0.7,0c-1.4,0,1.5,1,4.2,1c1.9,0-4.2,1-0.2,1c-4.2,0-6.7,0,1.7,0
            c4.5,0-3.2,0,3,0c-4.5,0-1.5,0,1.5,0c-3.9,0-5.6,0,2.5,0c-0.3,0,1.8,0,0,0c3.4,0-0.7-1-4.7-1c2,0-6.7-0.5-3.3-0.5
            c-0.9,0,7.1,0.7,2.8,0.7c-6.5,0-10.1,0.7-6.8,0.7c2.5,0-3.2,0,2.8,0c-6,0,1.1-0.9-0.7-0.9c5,0-5.5-0.5,0.3-0.5
            c6.8,0-5.6,0.7,3.8,0.7c4.4,0,3.2,0.7,3.8,0.7c-4.3,0-0.6,0,0.8,0c-2.9,0,3.3-0.9,1.2-0.9c-9.5,0-1.5-0.5-1.4-0.5
            c3.5,0-2.5-0.2-2.6-0.2c-9.5,0,9.7-0.1-0.7-0.1c4.8,0-10.6-0.1-3.6-0.1c0.2,0-7,0-0.6,0c0.1,0-6.6,0-2.8,0c-3.8,0-3.7,0.9,4.1,0.9
            c4.9,0,2.6,0.9,0.5,0.9c-2.2,0,1.7,0,4.6,0c10.5,0,0.5-0.9,4.4-0.9c1.8,0,6.6-0.5-1-0.5c-2,0,3.1-0.2,0.5-0.2
            c-6.1,0,4.8-0.1-4.9-0.1c6.8,0-7.5,0.8,2.6,0.8c-7.8,0-12.6,0.9-6.2,0.9c1.8,0-0.5,0-1.7,0c7.5,0-6.8-0.9-2.3-0.9
            c10.1,0-4.4-0.4-4.6-0.4c-0.2,0,5.5-0.2,1.4-0.2c-1.4,0-3.2-0.1,0-0.1c2.2,0-3.7,0-2,0c-2,0-3.8,0-1.3,0c-0.2,0-2.2,0-3.1,0
            c-4.7,0-3.8,0-1.8,0c-7.7,0.1-7.5,0.1-5.1,0.2c-2.5,0.1-2.5,0.1,3.1,0.2c1.1,0.1,7.1,0.2,2,0.3c0.2,0,0.4,0.1,1,0.1
            c0.6,0,1.7,0.1,3.7,0.1c2.3,0,0.8,0.1,2.8,0.1c-3.5,0-3.7,0.1-3.2,0.1c-0.3,0.1-0.9,0.2-0.6,0.3c-8.2,0.2-1.4,0.4-1.9,0.7
            c1.5,0,1.2,0.1,3.5,0.1c-2.2,0-0.9,0.1-1,0.1c3.6,0,0.5,0.1,4.1,0.1c-5.4,0,1.1,0.1-0.3,0.1c4.4,0-3.9,0.1-4.3,0.1
            c-0.4,0,0,0.1,1,0.1c-2.2,0-3.5,0.1-4,0.1c-0.5,0-0.3,0.1,0.6,0.1c0.4,0,2.7,0.1,5.4,0.1c0.3,0-2.5,0.1-2,0.1
            c-0.7,0.1,5.7,0.1,2.4,0.2c0.2,0-3.3,0.1-0.2,0.1c0.4,0-2.9,0.1-0.2,0.1c-4.2,0.1-4.3,0.1-3.5,0.2c-1.7,0.1-3.2,0.1-4.3,0.2
            c-1.1,0.1-1.9,0.1-2.3,0.2c-0.7,0.1,0.2,0.2,3.4,0.3c2.1,0,2.2,0.1,4,0.1c0.1,0-0.5,0,2.2,0.1c-1.6,0-2.7,0-3.8,0.1
            c-0.5,0.1-1.2,0.2,1.4,0.3c-1,0-1.6,0-1.2,0c0.4,0,0.6,0,4,0c3.6,0-3.4,0,2.3,0c7.3,0,3.5,0,3.3,0c1.3,0-4,0-1.2,0
            c0.3,0,2.7,0,2.6,0c7.3,0-3.1,0,2.5,0c-4.7,0-9,0-1.2,0c6.8,0-0.7,0,4.3,0c0.7,0-2.2,0-3.9,0c-2.2,0-6.6,0-2.2,0c2.1,0,1.7,0,3.7,0
            c-0.2,0-10.9,0-6.7,0c-1.8,0,15.8,0,3,0c-3.9,0,3.5,0,2.8,0c2.2,0-5.5,0-4.5,0c-8.5,0-2.1,0-1.6,0c4.7,0-7.4,0,1.8,0
            c-1.5,0-8.5,0-2.4,0c-6.5,0-6.3,0-2.5,0c0.2,0-3.8,0,2.5,0c3.9,0,5.7,0,5.2,0c4,0-1.4,0-4,0c-3,0-2.1,0-2.3,0c6.3,0,2.3,0,4.2,0
            c2,0,0.5,0-2.1,0c7.9,0,13.7,0,3.1,0.1c-1.5,0,2.5,0-6.9,0.1c-3.6,0-3.5,0-0.6,0c8.1,0,10.2,0,4.6,0c-0.8,0,0.8,0-2.5,0
            c-5.2,0,2.4,0-3,0c-3.3,0-3.5,0-3,0c-0.5,0-0.6,0,1.3,0c-2,0-0.4,0,3.7,0c13.3,0,1.6,0,3.9,0c-0.5,0,5.1,0-1.8,0c-2.7,0-1.7,0-0.7,0
            c7.1,0,8.5,0,5.3,0c3.4,0,2.4,0,0.9,0c-1.5,0,6.4,0,2.8,0c12.9,0,6.8,0,6.3,0c-5.4,0-5.1,0-1.4,0c1.6,0,0.8,0,5.2,0
            c-5.9,0-5.5,0-4.6,0c-1.4,0-0.6,0,3.8,0c8.4,0,4.9,0-4.1,0c6.2,0-13.3,0-2,0c-1.6,0-10.3,0-5.5,0c4.1,0-7.6,0-1.2,0
            c-4.4,0-6,0-2.7,0c8.5,0,2.6,0,3.5,0c-8.4,0-7.7,0,1.7,0c4.9,0-3.1,0-1.9,0c4.2,0-3.7,0-5.2,0c8.3,0-6.9,0,1.7,0c-1.3,0,6.5,0,2.3,0
            c-6.4,0,8.1,0-3.5,0c-7.4,0-0.4,0-1.1,0c0.5,0,6.7,0-1.4,0c-4.9,0-5.1,0-4.3,0c-0.7,0-0.5,0,0.6,0c-1.3,0-1.9,0-1.4,0
            c-0.3,0,0.4,0,4.9,0c-4.8,0-4.7,0-3.3,0c-1.2,0-1.5,0,1.6,0c10.8,0,8.5,0,3.2,0c-0.1,0-1.3,0,1.9,0c-4.5,0-1.9,0-1.2,0
            c-4.2,0,2.1,0,2.9,0c0.4,0,5.2,0,1.2,0c10.9,0,2.6,0-4.4,0c3.1,0-6.7,0-3.6,0c-3.5,0-3.1,0-3.2,0c-0.1,0-0.3,0,2.8,0
            c2.7,0-2.5,0-0.1,0c-3.6,0-3.6,0-1.2,0c-2.4,0,4.5,0,0.7,0c-2.2,0-2.3,0-1.7,0c-0.8,0-0.5,0,6.9,0c-1.6,0-7.3,0-4.9,0
            c-2.5,0,6,0,1,0c3.8,0-4.6,0,0.8,0c-4.4,0,4.3,0,0.6,0c1.1,0,0.4,0,3.1,0c4.8,0-1.8,0,2.1,0c-10.5,0-4.1,0-4.5,0c-5.7,0-2.9,0,0.4,0
            c-0.1,0,1.7,0,0.6,0c-0.7,0-7.1,0,0.6,0c-1.1,0,1.4,0-0.7,0c-7.3,0-6.7,0-4.2,0c4.7,0-3.9,0-1,0.1c-2.6,0,6.2,0,0,0
            c-1.5,0,1.5,0,7,0c3.5,0-0.2,0-2.9,0c8,0,12.8,0,3.6,0c-9.3,0,0.3,0-0.2,0c-0.7,0-0.5,0,3.3,0c-2.2,0,6.1,0,5,0c-0.7,0-0.7,0-2.9,0
            c5.4,0-0.8,0,5.7,0c4.8,0-8.8,0-2,0c7,0-1.8,0-2.8,0c-1.2,0,2.4,0-2.4,0c1.4,0,0.8,0,4.5,0c5.8,0-11,0-4.8,0c0.3,0,10.4,0,0.5,0
            c-4.7,0-3.8,0-2.7,0c-4.3,0-6.5,0-5.6,0c-3.2,0-5,0,2,0c-7.2,0-7.1,0-1.6,0.1c-2.6,0-5.2,0-3.7,0.1c-2.7,0-2.6,0-1,0.1
            c6,0-1.8,0,3.9,0c-4.7,0-4.5,0-0.5,0c3.6,0,5.7,0,3.2,0c3.3,0,7.5,0-1.6,0c-3.4,0,0.7,0-2.9,0.1c-2.3,0-4.4,0.1-1.3,0.1
            c-2.5,0-2.7,0.1-0.4,0.1c-2.1,0-2.3,0-1.2,0.1c-0.5,0-0.9,0-0.4,0c0.5,0,0.6,0,4.4,0c3.6,0-4,0-0.2,0.1c2.8,0,5.3,0,3,0.1
            c12,0,0,0-3.1,0.1c6,0,1.6,0,3.2,0.1c5,0,3,0.1-3.7,0.1c6.6,0,8.9,0.1,3.6,0.1c-7.3,0,1.3,0,1.4,0c-8.8,0-0.3,0,3.7,0
            c3.4,0,7.2,0,0.2,0c-4.2,0,6.5,0-0.5,0c0.5,0-6.8,0-3.8,0c-2.4,0,2.5,0,4.1,0c12.4,0,10.5,0,7.1,0c9.2,0,9,0-1.1,0
            c4.2,0,2.1,0,5.3,0c-5.7,0-1.1,0-2.7,0c-2.9,0,6.5,0-1,0c4.9,0,10.6,0,1.7,0c-7.7,0,3.7,0-6.5,0c-11.4,0-6.9,0-4.6,0
            c3.3,0,2.9,0-0.5,0c6.1,0,3,0-2.8,0c-7.5,0-1.2,0,3.8,0c11.8,0,3.1,0-0.7,0c-1.2,0-0.6,0-3.4,0c-3,0-4.6,0-1.4,0c-5.1,0-5.1,0-0.2,0
            c-4,0,9.9,0-1.4,0c-3.4,0,3.5,0,5.5,0c0.3,0,2.2,0,1.7,0.1c5.4,0,8.4,0-0.8,0c0.1,0-9.9,0-2.9,0c2.8,0,1.2,0,0.3,0
            c-7.8,0-3.7,0-3.5,0c-4,0,8.3,0-2.7,0c-1.7,0-1.1,0,1.2,0c7.8,0-3.3,0,1.7,0c4.5,0-4.4,0,0.4,0c-4.6,0,1.1,0,3.5,0c8,0,0.9,0,1.4,0
            c-4.6,0,2.3,0,1.7,0c-2.4,0-0.5,0-4.5,0c-1.7,0-0.6,0,2.1,0c4.4,0-2.1,0-4.1,0c6.6,0,5.3,0-1.2,0c-3.2,0-4.2,0-4,0
            c-1.4,0-2.4,0-2.4,0c0,0,1,0,3.6,0c-1.4,0-2.7,0.1,1.1,0.1c-3.9,0-4.5,0-3.6,0c0.4,0,0.6,0,1.3,0c-0.2,0,0.8,0,4,0
            c-3.3,0,0.7,0,0.1,0c-3.9,0-3.8,0,3.5,0c4.9,0,0.2,0,0.5,0c0.5,0-7.7,0-2.6,0c-1.1,0-5.1,0,7,0c-3.5,0-12.2,0-2.3,0
            c-3.5,0,3.7,0-2.9,0c-6.6,0,11.5,0,5.2,0c-0.8,0-2.8,0,4.4,0c-3.3,0,2.9,0-1.7,0c9.2,0-8.7,0,1.4,0c1.6,0,2.1,0-3.7,0
            c3.8,0,4.4,0,1.8,0c15.2,0-5.8,0-2.8,0c1,0-0.6,0,5.8,0c0.1,0-0.5,0,4.4,0c-7.2,0-0.8,0-1,0c-0.8,0-0.1,0-1.4,0c-4.3,0,8.6,0-3.4,0
            c5,0,4.3,0,2.3,0c1,0-0.2,0-0.5,0c0.3,0-0.1,0,3.4,0c3.6,0,7.9,0,2.6,0c-6.4,0-4.3,0-3.1,0c-4.7,0,15,0-0.4,0c-2.5,0-7.2,0-0.8,0
            c3,0,1.8,0-3.1,0c3.5,0-6.7,0-3.6,0c-4.8,0-3.7,0,3.7,0c-0.6,0-1.7,0,2.3,0c-15.2,0-2.2,0-4.5,0c5.3,0,6,0,4.2,0c-1.5,0,8.7,0,1.3,0
            c-0.5,0,3.8,0,2.7,0c-2,0-5.1,0-2,0c-2.4,0,5.8,0,3.2,0c3.7,0,8,0,0,0c1.4,0-5.9,0-4.9,0c-5.6,0-4.3,0-4.5,0c3.3,0-4,0,0.7,0
            c-4.7,0-10.2,0-0.8,0c-11.1,0-1.7,0,0.7,0c-1.8,0,11.6,0,3.9,0c1.5,0-4.2,0,2.7,0c-1.4,0,1.9,0-2.6,0c5.8,0-6.9,0-2,0
            c-2.6,0-5.6,0-4.6,0c-3.6,0-4.6,0,1,0c9.1,0-1.4,0,3.7,0c1.7,0-6.9,0,0.7,0c-7,0,5.9,0,3.4,0c6.9,0-4,0,3,0c-4.5,0-10.1,0-5.7,0
            c-3.6,0-4.5,0-3.8,0c5.3,0-3.7,0,0.5,0c-1.3,0-4.7,0-0.7,0c3,0,2.9,0-2.8,0c-9.7,0-5.1,0-3.9,0c-1.4,0,6.5,0,1.2,0
            c1.4,0-8.9,0-2.5,0c-4.8,0-0.6,0,2.6,0.1c7.3,0.1-0.5,0.1,2.4,0.2c0.4,0-5.6,0,7.8,0c-1.9,0,7.3,0-0.3,0c-6.7,0-3.4,0,1.6,0
            c10.2,0,7,0,3.3,0c-8.6,0-5.1,0-4.8,0c-12.4,0-1.5,0-3.6,0c0.4,0-5.6,0-0.2,0c-12.1,0,0.5,0-2.8,0c4.4,0,5.4,0-1.3,0
            c2.2,0,2.1,0-0.8,0c-2,0-2.2,0,1.9,0c0.1,0-7.1,0-3.9,0c0.8,0,8,0,0,0c-0.5,0-1.8,0-0.9,0c-4.9,0,0.2,0-4.3,0c8.5,0,1.9,0,1.2,0
            c10.4,0-4.6,0-0.8,0c-4.3,0-4.2,0-3.4,0c3.4,0,0,0,3.3,0c-0.4,0-3.7,0-2.9,0c-0.4,0,8.6,0,4,0c4.3,0-4.6,0,0.3,0c5.7,0,5.1,0,2.3,0
            c2.7,0-7,0,3,0c-1.5,0-0.2,0-3.9,0c11,0,8.8,0,4.6,0c5.5,0,17.6,1,9,1c3,0,1.9,1-1.7,1c6.8,0,10.1,0,4.9,0c-8,0,3.9-1-2.4-1
            c-1.5,0-6.9-0.5,1.4-0.5c2.1,0,1.3,0.8-3.7,0.8c4.9,0-3.1,0.8,3.4,0.8c0.5,0,2.8,0,0.4,0c-4.2,0-1.1-1-2.4-1c-0.2,0,3.8-0.5,4.2-0.5
            c-4.3,0-5.1-0.2-1.5-0.2c-4.1,0-7.7,0.9-1.3,0.9c-6.7,0-0.5,0.9-2.7,0.9c1.5,0,0.3,0,6.5,0c6.9,0,4.9,0-2.8,0c1.5,0,1,0,1,0
            c-2.5,0-7-1-4.3-1c5.5,0-0.9-0.5,0-0.5c-11.7,0-3.9,0.7-2,0.7c-12.8,0,7.6,0.7,2.9,0.7c2,0,4.8,0,6.5,0c5.1,0,9.9-1-1.8-1
            c-2.9,0,6.9-0.5,3.2-0.5c-0.9,0-3-0.2-1.4-0.2c-3.7,0-1.8-0.1,4-0.1c4.2,0,0.1,0.9-3.5,0.9c0.9,0,0.1,0.9-4.9,0.9c-13.3,0-6,0-5.4,0
            c1.6,0,0-1-3.4-1c2.8,0-1.9-0.5,0.4-0.5c2.1,0,1.4-0.2,1.8-0.2c1.2,0,3.2,0.8-3.5,0.8c11.7,0-7.1,0.9-1.4,0.9c-10.6,0,7.6,0,5.2,0
            c-0.6,0-6.9-1-1.1-1c-7.6,0-4.1-0.5-4.3-0.5c-1.5,0-4.3-0.2,1.6-0.2c8.1,0-2.2,0.8,4.2,0.8c-1,0,9,0.8-1.5,0.8c0.7,0-5.8,0-2.8,0
            c-1,0-2.6-0.9,1.1-0.9c4,0-1.5-0.5-3-0.5c-9.4,0-0.9-0.2-0.9-0.2c-0.4,0,0.8-0.1-1.9-0.1c2.5,0,0.4-0.1,5.6,0c-10.4,0-5.5,0-4.6,0
            c-7.9,0,3.6,0,1.2,0c-2.5,0,0.1,0,2,0c-3.4,0,4.9,0,0.2,0c-3.8,0-0.7,0-1.8,0c-9.3,0-7.8,0-3.2,0c-6.4,0-5.6,0,1.5,0
            c1,0,0.7,0,2.3,0c-4.7,0-0.9,0-4.2,0c-5.8,0-0.3,0-3.8,0c-2,0,9.5,0,2.1,0c0.3,0-4.8,0-1.4,0c4.7,0-3,0,5.7,0c8.9,0,0,0-3.6,0
            c-5,0-0.6,0,1.8,0c16.7,0-6.6,0,0,0c-7,0,0.1,0-3.7,0c-3.8,0-3.5,0-3.5,0c-0.7,0-1,0-1.2,0c-0.2,0,0,0,0.8,0c0.4,0,1.2,0,4.3,0
            c-3.3,0,1.6,0,2.9,0c6.8,0-0.6,0,2.4,0c-2.1,0-8.5,0-0.6,0c-6.2,0-6.2,0,2.8,0c-10.7,0,3.2,0-4.1,0c3.3,0-0.7,0,6.7,0c2.4,0-2,0,4,0
            c7.5,0-2.6,0-1.4,0c5.9,0-0.9,0,2.1,0c8.1,0,1.3,0.8,0.9,0.8c-9.4,0-11.9,0.8,2,0.8c-4.3,0-4.1,0-6.8,0c-7.5,0,2-0.8,2.6-0.8
            c-3.2,0,7.1-0.4,3.3-0.4c-8.9,0,6.5-0.2-1.5-0.2c-0.5,0-2.5-0.1,2.6-0.1c3.1,0,5.7,0.2-0.1,0.2c6,0,0.8,0.2-5.7,0.2
            c6.9,0-11.3,0-6.8,0c7.1,0,3.7-0.3,1.7-0.3c-0.6,0,3.8-0.1,3.1-0.1c-1.3,0-2.4-0.1-1.8-0.1c7.1,0-6.3,0,4.7,0c-2,0,0.1,0,5.2,0
            c10.1,0,5.7,0,3.5,0c1.7,0,1.7,0-5.3,0c5.2,0-0.2,0,0,0c-9.6,0-0.7,0-2.9,0c-7.6,0-10.2,0,1.6,0c-11.1,0,11.5,0-3.9,0
            c-13.8,0-7.2,0-1.3,0c3.6,0,5.7,0.7,3.3,0.8c-5.9,0-1.8,0.8,0.7,0.8c-2.4,0,4.1,0,2.1,0c3.6,0,3.6-0.7-6.7-0.7
            c-6.2,0,0.5-0.4-2.8-0.4c-2.2,0-10-0.2,1.9-0.2c0.3,0,3.3-0.1,1.4-0.1c0.3,0,4.6,0-4.8,0c7.1,0-2.1,0-1.5,0c-5.6,0-1.9,0.7,3.1,0.7
            c-0.3,0-3.2,0.7-1.4,0.7c7.2,0,1.3,0,4.3,0c9.8,0-1.8,0-0.8,0c-2.3,0,2.5,0,3.3,0c-8.7,0-6.6,0,3.8,0c0.8,0,1.2,0,1.2,0
            c-11,0-2.7,0-8.1,0c1.7,0-7.6,0-1.5,0c3.4,0-1.8,0,0.5,0c2,0,0.2,0,4.7,0c-5.2,0-2.4,0,1.2,0c5.2,0,5.6,0-0.2,0c-5.8,0-4.9,0-0.4,0
            c13.6,0,3.5,0,3.4,0c3.6,0-6.6,0,0.8,0c8.6,0-14.1,0,1.8,0c-0.3,0-3.3,0-3.3,0c1,0-9.4,0,3.1,0c-5.4,0-0.8,0,1.1,0
            c8.9,0,4.6,0-3.3,0c-4.6,0,1.9,0-2.2,0c-4.8,0-8.4-0.7-4-0.7c11.4,0,4-0.4,0.5-0.4c0.3,0-7.7-0.2-4.4-0.2c11.1,0-0.7-0.1-1.8-0.1
            c12.7,0-1.3,0,1,0c-1.6,0,2.7,0-0.8,0c-6.1,0-4.7,0.7,4.1,0.7c7.5,0-12.6,0.7-1.6,0.7c0.7,0,9,0,3.6,0c6.2,0,6.8,0,0.3,0
            c-3.9,0,1,0,2.1,0c4.6,0-0.3,0,1,0c7.9,0-4.7,0-2.7,0c3.8,0,2.3,0-0.1,0c0.9,0,0,0,0.4,0c-0.2,0,3.5,0,4.9,0c1.1,0-0.2,0,4.7,0
            c3.7,0-9.3-0.7,0.5-0.7c-1.9,0,6.1,0.3,1.3,0.3c3,0,3.2,0.3,3.9,0.3c5.9,0,5.7,0,2.3,0c3.4,0-16.8,0-3.9,0c7.4,0,0.7,0,0.1,0
            c-3.9,0,4.9,0-3.8,0c-0.9,0-2.8-0.7-5.1-0.7c5.4,0,0.3-0.3,2.4-0.3c10.5,0,1.1-0.2,1.3-0.2c6.1,0-4.7-0.1,1.2-0.1
            c2.1,0-1.1,0.6,4.7,0.6c-4.9,0,6.2,0.6-3.6,0.6c-0.2,0-10.6,0-2.1,0c-0.7,0,0.6-0.7,1.5-0.7c10.6,0,8.5,0.8,3.7,0.8
            c-1.2,0,6.9,0.8-6.8,0.8c-0.5,0-2.2,0,0.4,0c-1.3,0-3,0,1.4,0c-1.1,0-4.4,0,0.6,0c-2.9,0,9.8,0,2.2,0c2,0,3.8,0,3.1,0
            c6.3,0-6.7,0,0.2,0c2.3,0,5.7,0,1.3,0c-5.2,0-8.7-1.2-5-1.2c-7.8,0,0.6-0.6-0.5-0.6c3.4,0-6-0.3-2.6-0.3c-5.6,0,0.9-0.1,4-0.1
            c0,0,8.8,1.1,4.4,1.1c-3.7,0,2.1,1.1-8.5,1.1c2.4,0,4.4,0,4.2,0c9.1,0-8.3,0-2.5,0c2.9,0-8.1-1.2-1.9-1.2c-13.1,0-4,0.6-2.7,0.6
            c-7.6,0,1.4,0.6-0.2,0.6c3.6,0,4,0,4.6,0c11.3,0,4.5-1.2,1.8-1.2c-7,0,4.9-0.6,2.9-0.6c2.1,0-1.7-0.3-4-0.3c-3.9,0-11.5-0.1-3.9-0.1
            c-4,0,14.7-0.1-0.9-0.1c-4,0-16.3,0-1.7,0c-0.4,0-1.3,1.1-4.1,1.1c-0.4,0-14.8,1.1-3,1.1c5.1,0,0.8,0-0.4,0c-4.5,0,6-1.1-1.3-1.1
            c3.7,0-10.2-0.6-2.5-0.6c-5.9,0,2.8-0.3,2.5-0.3c-1.7,0,0.9,1,0,1c2.3,0-3,1-0.6,1c1.1,0-2.9,0,4.7,0c6.4,0-3.4-1.1,3.2-1.1
            c-3.7,0-2.2-0.6-3.2-0.6c0.5,0,1.5-0.3,0.2-0.3c-4.2,0,14.1-0.1,0.3-0.1c-2.1,0-11.2-0.1-2.9-0.1c1.3,0,5.2,0,0,0c0.6,0,7,0-2.8,0
            c5.9,0-9.5,0-3.1,0c-6.3,0,0.9,0-1.9,0c-4.2,0,4.7,0,0.5,0c-4.8,0,5,0,3.4,0c8.2,0-2.4,0,5.6,0c-13.7,0-7.2,0-1.1,0
            c7.8,0,2.1,0,3.3,0c0.8,0,1.8,0-5.6,0c-4.4,0,1.9,0-1.1,0c8.5,0-3,0,3.3,0c-0.1,0-4.2,0,3.2,0c-3,0-2.2,0-3,0c1.2,0-1.2,0,0.4,0
            c2.9,0-3.7,0-4.1,0c-3,0,2.8,0-0.6,0c4.2,0-9,1-4.2,1c7.3,0-4.8,1-0.4,1c-0.1,0-4.1,0-4.2,0c-0.4,0,0.2,0,1.2,0c-1.1,0-1.1,0,3.3,0
            c5.3,0-4.5,0,2.7,0c5.8,0,2.9,0,4.2,0c1.7,0,3-1,2.3-1c4.3,0-13.7-0.5-4.7-0.5c4.6,0,2.1,0.7,2.6,0.7c5.8,0-9.7,0.7,3.7,0.7
            c10.2,0,3.9,0-1,0c-2.6,0-11.3,0,3.4,0c-5.4,0-6.2,0-4.1,0c-9.2,0-5.1,0-3.7,0c-0.7,0-3.4,0,1.8,0c0.9,0-5,0,0.5,0c-5.1,0-7.3,0,1,0
            c2.8,0,2.8,0,4.7,0c7,0-1.3,0,3.5,0c1.8,0-3.4,0-6.4,0c2.2,0,0.7,0-2.4,0c4.2,0,4.4,0,1.1,0c11.9,0,10.4,0,2.5,0c0.2,0,0.4,0,1.4,0
            c-1.5,0,2.7,0,4.6,0c-7.2,0-0.3,0-8.4,0c-3.6,0,1.7,0,4.2,0c-3.8,0-0.3,0,1.4,0c-4.7,0-2.2,0,1.2,0c-3.8,0-12.7,0,1,0
            c1.2,0,13.4,0,3.5,0c-8.8,0,3.4,0,0.5,0c10.6,0-2.4,0-3.5,0c1.1,0,5.7-1-2.2-1c12.1,0-0.1-0.5,0-0.5c1.8,0,7.7,0.7,2.2,0.7
            c2.4,0-0.3,0.7,2.4,0.7c-2.5,0-13.2,0-5.2,0c4.1,0,4.6-1,0.7-1c-5.8,0-9.3-0.5-0.3-0.5c-4.1,0,3.3,0.7,3.7,0.7
            c7.8,0,0.3,0.8,0.3,0.8c2.9,0,3.1,0,2.7,0c0,0,4.8,0-0.7,0c2.1,0-0.7,0-1.8,0c-0.6,0-3.8,0-5.2,0c-0.2,0-4.4-1,1.6-1
            c0.7,0,1-0.5,0.7-0.5c5.6,0-12.3-0.2-4.5-0.2c0.2,0,1.1,0.9-0.8,0.9c-3.4,0-4.3,0.9,1.2,0.9c-3,0,0.8,0,4.1,0c0.2,0-14.1,0-4.2,0
            c2.1,0-2.4,0-5,0c0.8,0,8.8,0,3.5,0c4.1,0,6.5-1,3.7-1c-3.8,0,2.6-0.5-1.6-0.5c-4.1,0,2.8,0.8,4.9,0.8c5.9,0-4.5,0.8,4.3,0.8
            c1.5,0,9.6,0,2.5,0c4.9,0-4-1-1.3-1c-3,0,3.2,0.5,2.4,0.5c-7.1,0,3.1,0.5-0.2,0.5c6.1,0,6.1,0,1.4,0c-6.5,0-10,0,0.4,0
            c-10.2,0,4.1,0,0.4,0c3.7,0,1.1,0,1.2,0c2.6,0-6.2,0-5.1,0c1.6,0,7.5,0,1.3,0c3.8,0-7.1,0-2,0c-3.9,0-7.3,0,1.2,0c2.3,0-1.1,0-5.1,0
            c8.3,0,9,0,5.9,0c1.2,0,6.9-1,1.1-1c-4.1,0-4.3-0.5,1.6-0.5c3.7,0,3.9-0.3,1.7-0.3c-0.1,0,2-0.1-5-0.1c1.6,0,1.4-0.1-2.4-0.1
            c0.2,0-1.1,0-3.3,0c9.7,0,0.4,0,0.6,0c-0.4,0,9.1,0,1.5,0c-0.2,0,10.7,0,0.3,0c4.2,0-12,0,3.2,0c-2.5,0,7,0-1.8,0c-2,0-7.2,0-0.8,0
            c0.9,0,0.5,0-4.7,0c-5.1,0-4.1,0,1.2,0c-9.5,0,5.6,0-2.6,0c0,0-0.3,0-4,0c-7.3,0,0.3,0-0.2,0c2.1,0-9.3,0,2.4,0c-1.3,0-4.1,0-0.7,0
            c-3.5,0-1,0,3.3,0c-7.8,0-4.9,0-6.1,0c4.3,0,1.8,0,2.2,0c0.6,0-6.8,0,2.1,0c-0.5,0-2.7,0,2,0c8.9,0,0.6,1.1,0.8,1.1
            c11.9,0,2.4,1.1,3,1.1c1.6,0,0.8,0-2.4,0c4.7,0,7.5-1.2,3.9-1.2c6.2,0,5.6-0.6,6.7-0.6c2.7,0-8.7-0.3-2.1-0.3
            c-5.9,0,1.5-0.1-2.8-0.1c-2.3,0,7.9-0.1,4.9-0.1c-10.5,0-4.7,0-1.7,0c-9.3,0-3.2,0-1.2,0c1.3,0-7.2,0-2.4,0c-2,0,8.2,0,2.3,0
            c5.8,0,6.3,0,1.8,0c-8,0,4.6,0,0.5,0c0.7,0,4,0-3.8,0c-9.4,0,3,0-3.8,0c-4.6,0,2.2,0-0.1,0c2.8,0,7.1,0-1.3,0c-5.6,0,7.6,0-2.2,0
            c-3.3,0-6.4,0-4.4,0c4.7,0,2.6,0-2.4,0c0.8,0,6.4,0,1.6,0c7.3,0,15.6,0,8.2,0c5,0-6.1,0-1.5,0c0.3,0,0.3,0-1.4,0
            c-10.7,0-8.7,0-2.2,0c-1.7,0-0.6,0-4.3,0c-5.7,0-9.9,0-1,0c-5.1,0-0.7,0,0.3,0c-1.4,0,2.1,0,2,0c0.7,0,4.1,0,3.2,0
            c-3.2,0-1.1,0,1.5,0c4.2,0-4.3,0,3.3,0c4.2,0,2.9,0,2.8,0c0.1,0,5.3,0,2.6,0c-7,0-3,0-2.8,0c5.2,0,1.1,0-0.9,0c-8.7,0-4.4,0-6.7,0
            c-5.8,0,2.9,0-0.5,0c-18.6,0-5,0-5,0c1.7,0-5.3,0-0.4,0c0,0-5.6,0-2.3,0c-0.4,0,9.7,0,3.3,0c6,0,5,0-0.5,0c-13.7,0,1.2,0,4,0
            c6.7,0,5.1,0,5.1,0c4.9,0,4.8,0,1.8,0c0.1,0,4.6,0,2,0c2.3,0-3.3,0,1.3,0c-1.7,0,3.3,0-4.5,0c-3.5,0,5,0,1.2,0c4.4,0,0.2,0-0.9,0
            c-6.8,0-15.9,0-3.9,0c3,0,2.6,0-0.1,0c4.7,0,5.8,0,2.8,0c10.8,0-5.6,0-2.5,0c2.2,0-0.8,0,1.2-0.1c5.7,0-1.4,0-4.4,0
            c7.5,0-4.6,0,1.4,0c5.7,0,3,0,6.3,0c-1.7,0-10.5,0-2.4,0c-6.6,0-3.1,0-0.2,0c0.4,0,0.9,0-4.1,0c2.5,0-8.7,0-3.8,0
            c-3.8,0-4.1,0-3.1,0c12,0,2.3,0,3.5,0c-1.6,0,4.2,0,2.6,0c4.9,0,0,0,1.9,0c-0.2,0,7.9,0,4,0c-2.4,0,4.9,0-2.1,0c-1.8,0,0.2,0,0.4,0
            c-3.6,0-6.7,0-2.9,0c1.4,0-7.9,0,1.9,0c6.4,0,11.8,0,3.1,0c2,0-0.8,0,5.6,0c-3.8,0-6.6,0-4.9,0c-4.1,0-0.4,0-4.2,0
            c2.2,0,0.4,0-3.1,0c5.6,0-14.6,0,2.2,0c7.2,0,0.5,0,1.8,0c3.3,0,5.9,0,7.8,0c-4.4,0-4.2,0-4.9,0c12.4,0-5.2,0,1.3,0
            c8.2,0-9.9,0-4.6,0c-1.2,0,8.9,0,0.2,0c6.3,0-0.4,0-3.5,0c4.1,0-4.3,0-2.3,0c-6.8,0,4.9,0,2.6,0c-9.1,0,2.1,0,4.3,0
            c0.6,0,6.8,0,1.9,0c0.6,0-5.2,0-4.5,0c12.5,0-4.6,0,1.1,0c-2.7,0,9.9,0-5.3,0c5.8,0-0.4,0,5.2,0c-4.2,0-2.8,0-0.9,0
            c3.3,0,16.5,0,7.7,0c4.2,0-1.4,0-2.1,0c-8.1,0,3.7,0,1.2,0c1.3,0,8.4,0-4.7,0c-8.1,0-9,0-2.3,0c-8.5,0-11.6,0-7.3,0
            c-8.2,0-6.9,0,5.5,0c1.2,0,1.1,0,2.8,0c0.5,0,5.2,0-0.5,0c2.4,0-0.9,0,3.6,0c-5.6,0,5,0-2.7,0c7.5,0-5.4,0,3.4,0c2.8,0-10.2,0,5.6,0
            c6.2,0-3.5,0,2.8,0c-4.9,0-4.3,0,0.2,0c3.3,0-2.1,0-4.2,0c-7.1,0,3.2,0-2.4,0c-2.2,0,9.9,0,4.4,0c6.1,0-1.7,0-1.3,0
            c-4.3,0-9.9,0-2.8,0c-8.3,0,6.3,0,0.8,0c-3.5,0,8.6,0,2.2,0c-9,0,0.8,0,2.6,0c3.7,0,3.7,0,3.6,0c0,0,0.5,0-1.9,0c-2.6,0,2.3,0-4.2,0
            c6.3,0,2.1,0,3.6,0c2.6,0,3.2,0,2.2,0c0.7,0,0.9,0-3,0c-3.3,0,3.7,0,2,0c1.5,0,2.5,0,3.1,0c1.1,0,1.6,0,1.8,0c0.3,0-1.1,0-2.8-0.1
            c-0.5,0-0.6,0-3.7,0c-8,0-5.2,0-1.6,0c-5,0-0.3,0-4,0c-4.7,0,6.6,0,2.8,0c-0.4,0-3.4,0-3.5,0c1.1,0-1.3,0-1,0c0.9,0,7.1,0,2.8,0
            c7.9,0,7.9,0,2.1,0c5.6,0-4.9,0-5.6,0c4.4,0,5.3,0,0.7,0c2.4,0,2.2,0,3.2,0c0.6,0-10.7,0-5.2,0c7.5,0,0.7,0,4,0c2.1,0-4.8,0-4,0
            c-0.6,0-3.3,0-0.2,0c-12.8,0,1.7,0-3.8,0c11.9,0,1,0,2.7,0c-12,0,4.9,0-3.4,0c-1,0,0.3,0,1,0c1.6,0,7.4,0-1.6,0c7.6,0,11,0,7.2,0
            c-1.3,0-3.2,0-3.5,0c-4.7,0-5.8,0,0.8,0c3.4,0,2.6,0-4.1,0c4.9,0,0.8,0,1.6,0c4,0,2.5,0,2,0c-9.8,0-7,0-3.6,0c2.8,0-0.9,0,3.4,0
            c1.9,0,6,0,3.9,0c-0.6,0-5.3,0,0.1,0c9.7,0,10,0,1.6,0c8.6,0-3.4,0-1.7,0c10.5,0-1.1,0,4.2,0c-5.8,0,2.5,0-2.5,0c6.2,0-10.5,0-4.3,0
            c-4,0-3.8,0-2.9,0c4.9,0-1.8,0,1.9,0c-8.8,0,1.4,0,2.1,0c-3.3,0,9.1,0,4.6,0c-2.5,0,2,0,4.2,0c2.7,0,2.8,0,0.4,0c2.3,0,2.2,0,0.5,0
            c1.4,0,1.6,0-1.9,0c3.7,0,3.7-0.1,2.9-0.1c0.4,0-8.7-0.1-3-0.1c3.6,0,4,0,0.7-0.1c2.9,0,2.6,0,1.9,0c1,0,0.9,0-5.6,0
            c5.6,0-2.2,0-2.4,0c3.5,0,9.1,0,2.2,0c6.8,0-0.9,0,1.4,0c-2,0-8.6,0,3.2,0c2.2,0,1.9,0-2.2-0.1c-3.8,0,4.4,0,2.5-0.1
            c1.6,0,4.3-0.1,2.4-0.1c1.7,0,0.9-0.1-0.4-0.1c-2.5,0-0.1,0-6.3-0.1c-2.8,0,6.1,0,3.2-0.1c-9.5,0,3.2-0.1-1.1-0.1
            c-5.4,0,3.9,0-4.8,0c4.4,0-0.3,0,2.6,0c5.8,0,5.8,0,2.2,0c3.7,0,3.9,0,4.3,0c-0.4,0-0.8,0-1.9,0c1.4,0-2.7,0-3.8,0
            c5.5,0,1,0-0.1-0.1c-11.2,0-0.7-0.1,0.1-0.1c1.3,0,5,0,1.5,0c4,0,3.6,0,2.8,0c1.1,0,1.4,0-2.6-0.1c-4.7,0-6.2,0-4.5,0
            c6.2,0-2.9,0-0.4,0c-7.1,0,6.6,0-4,0c0.6,0-0.9,0,1,0c3,0,5.9,0-0.6,0c-7.3,0,1.9,0,0.4,0c2.5,0,8.5,0,4.5,0c2.7,0-3.8,0-2.1,0
            c-6.6,0-8.9,0-4.3,0c2.1,0,4.8,0,4.8,0c4.9,0,1.6,0-3.8,0c1.4,0-0.2,0,0.9,0c1.1,0-0.1,0-4.1,0c6.6,0-0.8,0,2.5,0
            c-2.9,0,0.6,0-5.8,0c-1.6,0,0.1,0,2.6,0c-1.4,0-3.5,0,2.6,0c-10.7,0,1.9,0,4.8,0c-2.5,0,8.8,0,3,0c-11,0-1.1,0,0.5,0
            c1.1,0,5.2,0-0.6,0c-5,0-6.8,0-3.3,0c-3.5,0,5.1,0-4.5,0c-0.5,0,5.5,0,4.1,0c3.8,0,6.6,0,4.2,0c-13,0,2.5,0,1.3,0
            c-1.5,0,4.1,0,0.5,0c-2.6,0-15.8,0-3.4,0c2.8,0,0.6,0,3.5,0c3.5,0-1,0,1,0c2.7,0,4.2,0,4.9,0c1.6,0,2.7,0,3.5,0
            c3.2,0,0.5-0.1-5.7-0.1c5.3,0,5.1,0,3.5,0c-0.8,0-1.6,0-2.4,0c-0.8,0-1.1,0-2.4,0c-15.4,0,0.5,0-3.8,0c-13.2,0,0.3,0,0.2,0
            c4.5,0,4.5,0,0.2,0c4.3,0,3.9,0,3.8-0.1c0.3,0,0.2,0-1.8-0.1c1.8,0-15,0-2.8,0c-5.4,0-4.2,0-4.9,0c-2.1,0-2.1,0-1.6,0
            c4.7,0-14.4,0-1.9,0c-1.3,0,5.5,0,1.9,0c4,0-2.1,0,2.8,0c-0.3,0-3.2,0,1.7,0c-5.5,0,7.1,0,3.3,0c3.9,0-3.3,0-1.2,0c4.4,0-6,0-1.8,0
            c-0.5,0-6.2,0,1.6,0c-5.1,0,5.4,0,4.2,0c1.2,0,0.9,0-1.8,0c-6.1,0-7.9,0-3.7,0c-1.9,0,6.1,0,2.1,0c0.3,0-0.5,0-4.5,0
            c-5.2,0-3.1,0,0.2,0c3.1,0-5.6,0-5,0c-1.6,0-3.3,0-0.5,0c0.5,0-4.3,0-4.4,0c-3.2,0,1.3,0-2.8,0c-0.8,0,2.8,0,4.1,0
            c5.6,0,7.6,0,3.6,0c-1.6,0-2.2,0,1.1,0c-5.7,0-0.3,0,2.7,0c-5.5,0-5.1,0-1.6,0c0.6,0,6.1,0,3.1,0c4.6,0-4.3,0-1.8,0
            c-9.6,0,0.8,0,1.1,0c-5.4,0-1.5,0,6.4,0c2.1,0,2.4,0,3.4,0c0.9,0,1.7,0,2.5,0c1.6,0,2.7,0,3.6,0c3.3,0,0.8-0.1-6-0.1
            c1.8,0,2.1,0,1.7,0c-0.5,0-1.7,0-2.9,0c-0.5,0,0.6,0-1.4-0.1c-10.1,0-0.6,0-3.7,0c4.7,0-3.9,0-0.2,0c-1.6,0-2.9,0,1.2-0.1
            c0.6,0,3.8,0-2.3,0c-1,0-4.4,0,2.2,0c4,0-2.8,0,1.8,0c1.9,0,3.2,0,3.4,0c1.7,0,3.4-0.1,4.5-0.1c2.1-0.1,1.5-0.1-7.5-0.2
            c4.9-0.1,3.3-0.2,3.2-0.3c-0.2-0.1,10.1-0.2-3.5-0.3c1.9,0,2.6-0.1,2.1-0.1c-0.2,0-0.2-0.1-4.5-0.1c3.6,0,3.5-0.1,1.5-0.1
            c2.1,0-2.1,0-3.9-0.1c5.9,0-6.2,0,1.1-0.1c4.8,0,4.6,0,6-0.1c2.3,0,1.7-0.1,1.4-0.2c-0.3-0.1-0.3-0.1,2.9-0.2
            c-5.9-0.1,6.6-0.2-1-0.3c7.7-0.1,7.6-0.2,0.5-0.3c7.2-0.1-5.8-0.2-3.8-0.3c5.5-0.1,3.3-0.2,1.2-0.3c-2.1-0.1-2.9-0.2,2.3-0.3
            c-2.2-0.1-0.5-0.2,0.7-0.3c1.2-0.1,2-0.2-2.2-0.3c8.4-0.1,5.1-0.2,1.1-0.3c7.2-0.1-8.6-0.2,1.4-0.4c6.2-0.1-1.6-0.2-0.6-0.4
            c-0.5-0.1-3.9-0.1-5.8-0.2c-1.6-0.1-3.5-0.1,3.6-0.2c4.1-0.1,6.1-0.1,6.5-0.2c0.4-0.1-0.8-0.1-3.1-0.2c0-0.1-3.9-0.2,1-0.4
            c-7.4-0.2-0.8-0.5-2.2-0.8c-6.2-0.1,5.1-0.2-2.8-0.4c-12.4-0.1,7.8-0.2,2.4-0.4c4.9-0.1,4.7-0.3,3.6-0.4c0.9-0.1,1.1-0.1,0.6-0.2
            c0.8-0.1,0.8-0.1-4.8-0.2c-7.9-0.3,4.5-0.5-4.2-0.8c-1.5,0-2.9-0.1-4.2-0.1c-1.3,0-2.4-0.1-3.3-0.1c-6.4-0.1-7.5-0.1-2.9-0.2
            c1.9-0.1,1.7-0.1,3.3-0.2c1.2,0,2.7-0.1,4.6-0.1c1.9,0,4.1-0.1,6.8-0.1c3.4-0.3,3.3-0.5-0.9-0.8c-0.7-0.1,3.4-0.3-3.1-0.4
            c-1-0.1,6.2-0.1-0.4-0.2c-7.2-0.1,6.2-0.1,5.1-0.2C-233.8,85.4-233.4,83.7-233.5,82z"/>
          <g>
            <path d="M-297.6,109.5c0.4,0,0.7,0.2,0.9,0.5c0.2,0.3,0.3,0.7,0.3,1.1c0,0.2,0,0.4-0.1,0.5c0,0.2-0.1,0.3-0.2,0.4
              c-0.1,0.1-0.3,0.3-0.5,0.4c-0.2,0.1-0.5,0.2-0.8,0.4c-0.8,0.3-1.4,0.7-1.8,1.2c-0.4,0.5-0.7,0.9-0.7,1.4c0,0.3,0.1,0.6,0.3,0.8
              c0.2,0.3,0.5,0.5,0.9,0.7c0.4,0.2,0.9,0.4,1.6,0.5c0.6,0.1,1.4,0.2,2.3,0.2c0.9,0,1.8-0.1,2.7-0.3c0.8-0.2,1.6-0.5,2.2-1
              c0.6-0.4,1.1-0.9,1.5-1.5c0.4-0.6,0.6-1.2,0.6-1.8c0-0.5-0.2-1-0.6-1.5c-0.4-0.5-1.1-1.1-1.9-1.7c-1.6-1-2.8-1.8-3.6-2.5
              c-0.8-0.6-1.3-1-1.5-1.2c-1-0.9-1.8-1.8-2.3-2.6c-0.5-0.8-0.8-1.7-0.8-2.6c0-0.8,0.2-1.6,0.6-2.4c0.4-0.8,0.9-1.5,1.6-2.2
              c0.7-0.7,1.5-1.3,2.4-1.9s1.8-1.1,2.8-1.5c1-0.4,2-0.8,2.9-1c1-0.2,1.9-0.4,2.8-0.4c0.7,0,1.3,0.1,1.9,0.2c0.6,0.2,1.1,0.4,1.5,0.7
              c0.4,0.3,0.8,0.7,1,1.2c0.2,0.5,0.4,1.1,0.4,1.8c0,1-0.3,2-0.9,2.9c-0.6,0.9-1.5,1.8-2.7,2.6c-0.5,0.4-1,0.6-1.5,0.6
              c-0.5,0-0.8-0.2-1.1-0.5c-0.3-0.3-0.4-0.7-0.4-1.2c0-0.4,0.1-0.8,0.3-1.1c0.2-0.4,0.6-0.7,1.1-1c0.4-0.2,0.7-0.5,1.1-0.8
              s0.5-0.7,0.5-1c0-0.3-0.1-0.5-0.3-0.6c-0.2-0.1-0.5-0.1-0.8-0.1c-0.6,0-1.2,0.1-1.9,0.2c-0.7,0.1-1.4,0.3-2,0.6s-1.3,0.5-2,0.9
              c-0.6,0.3-1.2,0.7-1.7,1.1c-0.5,0.4-0.9,0.8-1.2,1.3c-0.3,0.4-0.4,0.9-0.4,1.3c0,0.3,0.1,0.6,0.2,0.8c0.1,0.3,0.3,0.5,0.5,0.8
              c0.2,0.3,0.5,0.5,0.9,0.8c0.3,0.3,0.7,0.6,1.2,0.9l4.8,3.5c0.6,0.5,1.2,0.9,1.6,1.3c0.5,0.4,0.9,0.9,1.2,1.3
              c0.3,0.4,0.6,0.9,0.8,1.3s0.3,0.9,0.3,1.4c0,1.1-0.3,2.2-0.8,3.2s-1.4,2-2.4,2.8c-1,0.8-2.3,1.5-3.8,2s-3.1,0.8-4.9,0.8
              c-1.7,0-3.1-0.1-4.2-0.4c-1.2-0.3-2.1-0.6-2.9-1.1c-0.8-0.5-1.3-1-1.6-1.6s-0.5-1.2-0.5-1.9c0-0.7,0.2-1.4,0.5-2.1
              c0.3-0.7,0.8-1.4,1.5-2s1.4-1.2,2.3-1.7C-299.7,110.1-298.7,109.8-297.6,109.5z"/>
            <path d="M-260.1,116c-0.6,0.7-1.3,1.3-2.1,2c-0.8,0.6-1.6,1.2-2.5,1.7c-0.8,0.5-1.7,0.9-2.5,1.2c-0.8,0.3-1.6,0.5-2.2,0.5
              s-1.2-0.2-1.6-0.6c-0.4-0.4-0.6-1-0.6-1.9c0-0.6,0.1-1.4,0.3-2.2c-0.4,0.5-0.8,1.1-1.3,1.6c-0.5,0.5-1.1,1-1.8,1.5
              c-0.7,0.5-1.4,0.8-2.3,1.1c-0.8,0.3-1.8,0.4-2.8,0.4c-0.5,0-0.9,0-1.3-0.1s-0.8-0.3-1.1-0.5c-0.3-0.2-0.6-0.5-0.8-0.9
              c-0.2-0.4-0.3-0.9-0.3-1.5c0,0,0-0.2,0.1-0.6c0.1-0.4,0.2-1,0.5-1.9s0.7-2,1.4-3.4s1.5-3.1,2.6-5c0.3-0.5,0.6-0.9,1-1.1
              c0.4-0.2,0.8-0.3,1.2-0.3c0.2,0,0.4,0,0.6,0.1s0.4,0.1,0.6,0.2c0.2,0.1,0.3,0.2,0.4,0.4c0.1,0.2,0.2,0.3,0.2,0.5
              c0,0.1,0,0.3-0.1,0.4c-0.1,0.2-0.2,0.5-0.4,0.9c-0.2,0.4-0.5,0.8-0.8,1.3c-0.3,0.5-0.6,1-1,1.6c-0.3,0.6-0.6,1.1-0.9,1.7
              s-0.5,1.2-0.7,1.8s-0.3,1.2-0.3,1.8c0,0.2,0.1,0.5,0.2,0.7c0.1,0.2,0.4,0.3,0.7,0.3c0.9,0,1.7-0.2,2.5-0.7c0.8-0.5,1.5-1.1,2.2-1.8
              c0.7-0.7,1.3-1.5,1.9-2.4c0.6-0.8,1-1.6,1.4-2.3c0.3-0.5,0.5-1,0.7-1.5c0.2-0.5,0.4-1,0.6-1.5c0.2-0.5,0.5-0.8,0.8-1.1
              c0.3-0.3,0.7-0.5,1.1-0.5c0.5,0,0.9,0.2,1.2,0.5c0.3,0.3,0.4,0.7,0.4,1.1c0,0.2-0.1,0.6-0.3,1c-0.2,0.4-0.4,0.9-0.7,1.5
              s-0.6,1.1-0.9,1.8c-0.3,0.6-0.6,1.3-0.9,1.9s-0.5,1.3-0.7,1.9c-0.2,0.6-0.3,1.2-0.3,1.7c0,0.5,0.3,0.7,0.9,0.7
              c0.4,0,0.9-0.1,1.6-0.4c0.6-0.2,1.3-0.6,2-1c0.7-0.4,1.4-1,2.1-1.6c0.7-0.6,1.3-1.2,1.8-1.9L-260.1,116z"/>
            <path d="M-259.7,108.5c0.3-0.6,0.6-1,1-1.3c0.4-0.3,0.8-0.4,1.2-0.4c0.3,0,0.6,0.1,0.9,0.4c0.3,0.2,0.4,0.6,0.4,1.1
              c0,0.2,0,0.4-0.1,0.6s-0.1,0.4-0.2,0.7c0.3-0.4,0.7-0.8,1.3-1.2c0.6-0.4,1.2-0.8,1.9-1.1c0.7-0.3,1.4-0.6,2.1-0.8s1.4-0.3,2-0.3
              c0.7,0,1.3,0.2,1.8,0.5c0.5,0.3,0.7,0.9,0.7,1.8c0,0.5-0.1,1-0.2,1.5s-0.3,1.1-0.6,1.6c-0.2,0.5-0.5,1.1-0.8,1.6
              c-0.3,0.5-0.6,1-0.9,1.4c-0.3,0.5-0.5,0.9-0.8,1.2c-0.2,0.4-0.4,0.7-0.6,0.9c-0.2,0.2-0.3,0.5-0.3,0.8c0,0.1,0,0.2,0.1,0.3
              s0.2,0.1,0.3,0.1c0.1,0,0.2,0,0.3,0s0.3-0.1,0.5-0.2c0.7-0.3,1.5-0.6,2.3-1c0.8-0.4,1.5-0.8,2.2-1.3s1.4-0.9,2-1.4
              c0.6-0.5,1.1-0.9,1.5-1.2c0.1-0.1,0.2-0.2,0.3-0.2s0.2-0.1,0.3-0.1c0.2,0,0.4,0.1,0.5,0.3c0.1,0.2,0.2,0.4,0.2,0.7
              c0,0.4-0.1,0.9-0.4,1.4c-0.3,0.5-0.7,1-1.3,1.5c-0.8,0.6-1.5,1.1-2.1,1.5c-0.6,0.5-1.3,0.9-2,1.3s-1.4,0.8-2.2,1.1
              c-0.8,0.3-1.7,0.7-2.7,1c-0.4,0.1-0.7,0.2-1,0.2c-0.3,0.1-0.6,0.1-0.8,0.1c-0.7,0-1.3-0.2-1.6-0.6c-0.3-0.4-0.5-1-0.5-1.7
              c0-0.1,0-0.2,0-0.3s0-0.2,0-0.3c0-0.4,0.1-0.9,0.3-1.4c0.2-0.5,0.4-1,0.7-1.6c0.3-0.5,0.6-1.1,0.9-1.6c0.3-0.5,0.6-1,0.9-1.5
              c0.3-0.5,0.5-0.9,0.7-1.3c0.2-0.4,0.3-0.7,0.3-0.9c0-0.2-0.1-0.4-0.2-0.5c-0.1-0.1-0.3-0.2-0.5-0.2c-0.9,0-1.7,0.3-2.5,0.8
              c-0.8,0.5-1.5,1.2-2.2,1.9c-0.7,0.8-1.3,1.6-1.9,2.4c-0.6,0.8-1.1,1.6-1.5,2.3c-0.3,0.5-0.5,0.9-0.7,1.4c-0.2,0.5-0.5,1-0.7,1.4
              c-0.2,0.4-0.5,0.8-0.8,1.1c-0.3,0.3-0.7,0.4-1.2,0.4c-0.5,0-0.9-0.2-1.1-0.5c-0.3-0.3-0.4-0.7-0.4-1.1c0-0.2,0.1-0.6,0.3-1.1
              c0.2-0.5,0.4-1.1,0.7-1.8c0.3-0.7,0.6-1.4,1-2.2s0.8-1.6,1.1-2.3c0.4-0.8,0.7-1.5,1.1-2.2C-260.2,109.5-259.9,108.9-259.7,108.5z"
              />
            <path d="M-237.6,109.4c0.8,0.4,1.6,0.9,2.2,1.5c0.7,0.6,1.2,1.2,1.7,1.8s0.8,1.3,1,1.9c0.2,0.6,0.4,1.3,0.4,1.9
              c0,0.8-0.2,1.5-0.7,2.1c-0.4,0.6-1,1.1-1.7,1.6c-0.7,0.4-1.5,0.8-2.5,1c-0.9,0.2-1.9,0.3-2.8,0.3c-0.7,0-1.4-0.1-2.1-0.2
              s-1.3-0.4-1.8-0.7c-0.6-0.3-1-0.7-1.4-1.3c-0.4-0.5-0.7-1.1-0.8-1.8c0-0.1,0-0.2,0-0.3c0-0.4,0.1-0.7,0.4-1
              c0.3-0.3,0.5-0.4,0.9-0.4c0.1,0,0.3,0,0.5,0.1c0.2,0.1,0.3,0.2,0.4,0.4c0.2,0.3,0.4,0.6,0.7,0.9c0.3,0.3,0.7,0.5,1.1,0.7
              c0.4,0.2,0.8,0.3,1.3,0.4c0.4,0.1,0.9,0.2,1.3,0.2c0.4,0,0.9,0,1.3-0.1c0.4-0.1,0.8-0.2,1.1-0.4c0.3-0.2,0.5-0.4,0.7-0.7
              c0.2-0.3,0.3-0.6,0.3-1c0-0.7-0.2-1.3-0.5-1.9c-0.3-0.6-0.7-1.1-1.2-1.6c-0.5-0.5-1.1-1-1.7-1.4c-0.6-0.4-1.3-0.8-1.9-1.2
              c-0.1,0-0.2-0.2-0.3-0.4c-0.1-0.2-0.2-0.4-0.2-0.6c0-0.2,0-0.3,0.1-0.4c0.2-0.3,0.5-0.6,0.8-0.9c0.3-0.3,0.6-0.6,0.9-0.8
              c0.3-0.3,0.7-0.5,1.1-0.6c0.4-0.2,0.8-0.2,1.2-0.2c0.3,0,0.6,0,0.8,0.1c0.3,0.1,0.5,0.2,0.7,0.3s0.3,0.3,0.4,0.4
              c0.1,0.2,0.2,0.3,0.2,0.4c0,0.2,0,0.4-0.1,0.6c-0.1,0.2-0.2,0.3-0.4,0.5c-0.2,0.2-0.3,0.3-0.5,0.5
              C-237.2,109.1-237.4,109.2-237.6,109.4z"/>
            <path d="M-221.8,106c1.1,0,2,0.3,2.5,0.8s0.8,1.3,0.8,2.3c0,0.6-0.2,1.2-0.5,1.8c-0.3,0.6-0.8,1.3-1.6,1.9s-1.7,1.3-3,2
              c-1.2,0.7-2.8,1.4-4.6,2c0.1,0.4,0.3,0.7,0.6,0.9c0.4,0.2,0.8,0.3,1.4,0.3c0.6,0,1.3-0.1,2-0.3c0.7-0.2,1.4-0.4,2.1-0.7
              c0.7-0.3,1.4-0.6,2.1-0.9c0.7-0.3,1.3-0.7,1.8-1c0.5-0.3,1-0.6,1.4-0.8c0.4-0.2,0.6-0.4,0.7-0.4c0.1-0.1,0.2-0.1,0.3-0.1
              c0.1,0,0.2,0,0.3,0c0.2,0,0.3,0,0.4,0.1s0.2,0.2,0.3,0.3c0.1,0.1,0.1,0.2,0.2,0.3s0,0.2,0,0.3c0,0.1,0,0.3,0,0.4s-0.1,0.4-0.3,0.6
              c-0.1,0.1-0.3,0.3-0.7,0.6c-0.4,0.3-0.9,0.7-1.5,1.1c-0.6,0.4-1.3,0.8-2.1,1.3c-0.8,0.5-1.7,0.9-2.6,1.3c-0.9,0.4-1.9,0.7-2.8,1
              c-1,0.3-2,0.4-2.9,0.4c-0.8,0-1.5-0.2-2.2-0.5s-1.2-0.7-1.6-1.3s-0.8-1.1-1-1.8c-0.2-0.7-0.3-1.4-0.3-2.2c0-0.6,0.1-1.2,0.3-1.9
              c0.2-0.7,0.6-1.4,1-2.1c0.4-0.7,1-1.4,1.6-2.1s1.3-1.3,2.1-1.8c0.8-0.5,1.7-0.9,2.6-1.2C-223.9,106.2-222.8,106-221.8,106z
               M-222.5,108.8c-0.1,0-0.1,0-0.2,0s-0.1,0-0.2,0c-0.5,0-1,0.1-1.5,0.3c-0.5,0.2-0.9,0.5-1.2,0.8c-0.4,0.3-0.7,0.7-1,1.1
              c-0.3,0.4-0.6,0.8-0.8,1.3c-0.2,0.4-0.4,0.8-0.6,1.2c-0.2,0.4-0.3,0.7-0.4,1c0.5-0.2,1-0.5,1.5-0.8c0.5-0.3,1-0.6,1.4-0.9
              c0.5-0.3,0.8-0.5,1.2-0.8c0.3-0.2,0.6-0.4,0.7-0.5c0.6-0.4,1-0.7,1.3-1.1c0.2-0.3,0.3-0.6,0.3-0.9c0-0.2-0.1-0.4-0.2-0.5
              C-222.2,108.9-222.3,108.8-222.5,108.8z"/>
            <path d="M-210.4,109.5c-0.5,1-1,1.9-1.4,2.9c-0.5,0.9-0.9,1.8-1.3,2.6c-0.2,0.3-0.3,0.7-0.5,1.1c-0.2,0.4-0.2,0.8-0.2,1.1
              c0,0.2,0,0.3,0.1,0.5c0.1,0.1,0.2,0.2,0.4,0.2c0.3,0,0.6-0.1,1.1-0.3c0.4-0.2,0.9-0.4,1.4-0.7c0.5-0.3,1-0.6,1.6-1
              c0.6-0.4,1.1-0.7,1.6-1.1c0.5-0.4,1.1-0.8,1.5-1.2c0.5-0.4,0.9-0.7,1.3-1.1c0.2-0.2,0.4-0.2,0.6-0.2c0.2,0,0.4,0.1,0.6,0.3
              c0.2,0.2,0.2,0.5,0.2,0.8c0,0.3-0.1,0.6-0.2,1c-0.2,0.3-0.4,0.6-0.8,1c-0.9,0.8-1.8,1.6-2.7,2.3c-0.9,0.7-1.8,1.4-2.7,1.9
              c-0.9,0.6-1.8,1-2.7,1.3c-0.9,0.3-1.7,0.5-2.5,0.5c-0.5,0-1-0.1-1.4-0.2s-0.7-0.3-0.9-0.6c-0.2-0.3-0.4-0.5-0.5-0.9
              c-0.1-0.3-0.1-0.7-0.1-1.1c0-0.7,0.1-1.4,0.3-2.1c0.2-0.7,0.5-1.4,0.8-2c0.4-0.8,0.8-1.7,1.2-2.5c0.4-0.8,0.8-1.6,1.2-2.4h-0.9
              c-0.8,0-1.3-0.1-1.6-0.4c-0.3-0.2-0.4-0.5-0.4-0.8c0-0.1,0-0.3,0.1-0.5s0.2-0.4,0.4-0.6s0.4-0.3,0.6-0.4c0.2-0.1,0.5-0.2,0.8-0.2
              h2.2l4.3-8.6c0.3-0.5,0.6-0.9,1-1.1c0.4-0.2,0.8-0.3,1.3-0.3c0.4,0,0.8,0.1,1.1,0.3c0.3,0.2,0.5,0.6,0.5,1.1c0,0.3-0.1,0.5-0.2,0.8
              c-0.1,0.3-0.3,0.6-0.5,0.9c-0.1,0.2-0.3,0.5-0.5,0.8c-0.2,0.3-0.4,0.7-0.6,1c-0.2,0.4-0.4,0.7-0.6,1.1c-0.2,0.4-0.4,0.8-0.6,1.1
              c-0.5,0.9-1,1.8-1.5,2.8h6.7c0.3,0,0.6,0,0.9,0.1c0.3,0,0.5,0.1,0.7,0.2s0.4,0.2,0.5,0.4c0.1,0.2,0.2,0.4,0.2,0.7
              c0,0.2,0,0.3-0.1,0.5c0,0.2-0.1,0.3-0.3,0.4c-0.1,0.1-0.3,0.2-0.5,0.3c-0.2,0.1-0.5,0.1-0.9,0.2L-210.4,109.5z"/>
          </g>
          </svg></span>
        <h2 class="site-description"><?php bloginfo('description'); ?></h2>

      </div><!-- class="header-content" -->
      <!-- TOP NAVIGATION -->
      <nav class="header-nav">
        <?php
          wp_nav_menu(array(
            'theme_location'    => 'primary',
            'container'         => false,
            'menu_class'        => 'top-navigation'
          ));
        ?>
      </nav>

    </div><!-- class="main-header-wrapper" -->
  </header><!-- class="main-header header-container" -->

