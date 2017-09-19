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
  <header class="main-header header-container background-image" style="background-image: url(<?php header_image(); ?>);">
    <div class="main-header-wrapper">
      <!-- HEADER CONTENT -->
      <div class="header-content">
        <h1 class="site-title"><?php bloginfo('name'); ?></h1>
        <span class="sunset-logo"></span>
        <h2 class="site-description"><?php bloginfo('description'); ?></h2>

      </div><!-- class="header-content" -->
      <!-- TOP NAVIGATION -->
      <nav class="header-nav">
        <?php
          wp_nav_menu(array(
            'theme_location'    => 'primary',
            'container'         => false,
            'menu_class'        => 'top-navigation',
            'walker'            => new Sunset_Walker_Nav_Primary()
          ));
        ?>
      </nav>

    </div><!-- class="main-header-wrapper" -->
  </header><!-- class="main-header header-container" -->

