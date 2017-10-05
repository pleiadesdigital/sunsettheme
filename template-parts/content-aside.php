<?php /* Aside  Post Format */ ?>

<?php
  //$class = get_query_var('post-class');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(array('sunset-format-aside'/*, $class*/)); ?>>

  <!-- CONTENT HEADER -->
  <header class="entry-header content-header blog-header">
    <div class="content-header-wrapper">

        <div class="aside-image">
          <?php if (sunset_get_attachment()) : ?>
            <div class="aside-featured-image background-image" style="background-image: url(<?php echo sunset_get_attachment(); ?>)">
            </div>
          <?php endif; ?>
        </div><!-- class="aside-image" -->

        <div class="aside-content">
          <div class="entry-meta">
            <?php echo sunset_posted_meta(); ?>
          </div>
          <div class="entry-excerpt">
            <?php the_content(); ?>
          </div>
        </div><!-- class="aside-content" -->

    </div><!-- class="content-header-wrapper" -->
  </header><!-- class="content-header blog-section" -->


  <!-- CONTENT FOOTER -->
  <footer class="entry-footer content-footer blog-footer">

    <div class="content-footer-wrapper">
      <div class="footer-phantom"></div>
      <div class="footer-content">
        <?php echo sunset_posted_footer(); ?>
      </div>
    </div><!-- class="content-footer blog-footer" -->
  </footer><!-- class="entry-footer content-footer-wrapper" -->

</article>
