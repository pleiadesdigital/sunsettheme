<?php /* Image Post Format */ ?>


<article id="post-<?php the_ID(); ?>" <?php post_class('sunset-format-image'); ?>>

    <!-- CONTENT HEADER -->
    <header class="entry-header content-header blog-header">
      <div class="content-header-wrapper background-image"  style="background-image: url(<?php echo sunset_get_attachment(); ?>)">
        <?php
          if (is_single()) {
            the_title('<h1 class="entry-title">', '</h1>');
          } elseif (is_front_page() && is_home()) {
            the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
          } else {
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
          }
        ?>
        <!-- ENTRY META -->
        <div class="entry-meta">
          <?php echo sunset_posted_meta(); ?>
        </div>
        <!-- EXCERPT -->
        <div class="entry-excerpt image-caption">
          <?php the_excerpt(); ?>
        </div>
      </div><!-- class="content-header-wrapper" -->
    </header><!-- class="content-header blog-section" -->


  <!-- CONTENT FOOTER -->
  <footer class="entry-footer content-footer blog-footer">
    <div class="content-footer-wrapper">
      <?php echo sunset_posted_footer(); ?>
    </div><!-- class="content-footer blog-footer" -->
  </footer><!-- class="entry-footer content-footer-wrapper" -->

</article>
