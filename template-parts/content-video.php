<?php /* Video Post Format */ ?>


<article id="post-<?php the_ID(); ?>" <?php post_class('sunset-format-video'); ?>>
  <!-- CONTENT HEADER -->
  <header class="entry-header content-header blog-header">
    <div class="content-header-wrapper">
      <?php echo sunset_get_embedded_media(array('video', 'iframe')); ?>
      <?php
        if (is_single()) {
          the_title('<h1 class="entry-title">', '</h1>');
        } elseif (is_front_page() && is_home()) {
          the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
        } else {
          the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        }
      ?>
      <div class="entry-meta">
        <?php echo sunset_posted_meta(); ?>
      </div>
    </div><!-- class="content-header-wrapper" -->
  </header><!-- class="content-header blog-section" -->

  <!-- CONTENT SECTION 1 -->
  <div class="entry-content content-body blog-section-1">
    <div class="content-body-wrapper">

    <?php if (has_post_thumbnail()) : ?>
      <?php $featured_image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
      <a href="<?php the_permalink(); ?>" class="standard-featured-link"><div class="standard-featured-image background-image" style="background-image: url(<?php echo $featured_image; ?>)">
        <?php //the_post_thumbnail(); ?>
      </div><!-- class="standard-featured-image" --></a>
    <?php endif; ?>
      <div class="entry-excerpt">
        <?php the_excerpt(); ?>
      </div>

    </div><!-- class="content-body blog-section-1" -->
  </div><!-- class="entry-content content-body-wrapper" -->


  <!-- CONTENT FOOTER -->
  <footer class="entry-footer content-footer blog-footer">
    <div class="content-footer-wrapper">
      <?php echo sunset_posted_footer(); ?>
    </div><!-- class="content-footer blog-footer" -->
  </footer><!-- class="entry-footer content-footer-wrapper" -->

</article>
