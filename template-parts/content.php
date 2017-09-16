<?php /* Standard Post Format */ ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <!-- CONTENT HEADER -->
  <header class="entry-header content-header blog-header">
    <div class="content-header-wrapper">
      <div class="entry-title">
        <?php
          if (is_single()) {
            the_title('<h1 class="entry-title">', '</h1>');
          } elseif (is_front_page() && is_home()) {
            the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>');
          } else {
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
          }
        ?>
      </div><!-- class="entry-title" -->

      <div class="entry-meta">
        <?php echo sunset_posted_meta(); ?>
      </div>
    </div><!-- class="content-header-wrapper" -->
  </header><!-- class="content-header blog-section" -->


  <!-- CONTENT SECTION 1 -->
  <div class="entry-content content-body blog-section-1">
    <div class="content-body-wrapper">

    <?php if (has_post_thumbnail()) : ?>
      <div class="standard-featured-image">
        <?php the_post_thumbnail(); ?>
      </div><!-- class="standard-featured-image" -->
    <?php endif; ?>
      <div class="entry-excerpt">
        <?php the_excerpt(); ?>
      </div>

      <div class="button-container">
        <a href="<?php the_permalink(); ?>" class="btn btn-default"><?php _e('Read More'); ?></a>
      </div><!-- class="button-container" -->

    </div><!-- class="content-body blog-section-1" -->
  </div><!-- class="entry-content content-body-wrapper" -->


  <!-- CONTENT FOOTER -->
  <footer class="entry-footer content-footer blog-footer">
    <div class="content-footer-wrapper">
      <?php echo sunset_posted_footer(); ?>

    </div><!-- class="content-footer blog-footer" -->
  </footer><!-- class="entry-footer content-footer-wrapper" -->

</article>