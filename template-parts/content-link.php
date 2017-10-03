<?php /* Standard Post Format */ ?>


<article id="post-<?php the_ID(); ?>" <?php post_class('sunset-format-link'); ?>>

  <!-- CONTENT HEADER -->
  <header class="entry-header content-header blog-header">
    <div class="content-header-wrapper">

    <?php
      $link = sunset_grab_url();
      the_title('<h1 class=entry-title><a href="' . $link . '" target="_blank">', '<div class="link-icon"><i class="fa fa-link" aria-hidden="true"></i></div></a></h1>');

    ?>

    </div><!-- class="content-header-wrapper" -->
  </header><!-- class="content-header blog-section" -->
</article>
