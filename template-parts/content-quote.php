<?php /* Quote Post Format */ ?>


<article id="post-<?php the_ID(); ?>" <?php post_class('sunset-format-quote'); ?>>

  <!-- CONTENT HEADER -->
  <header class="entry-header content-header blog-header">
    <div class="content-header-wrapper">
      <div class="the-quote">
        <h1 class="quote-content"><?php echo get_the_content(); ?>&nbsp;</h1>
      </div><!-- class="the_-quote" -->
      <div class="the-quote-author">
        <?php the_title('<h2 class="quote-author">-', '-</h2>'); ?>
      </div><!-- class="the-quote-author" -->
    </div><!-- class="content-header-wrapper" -->
  </header><!-- class="content-header blog-section" -->


  <!-- CONTENT FOOTER -->
  <footer class="entry-footer content-footer blog-footer">
    <div class="content-footer-wrapper">
      <?php echo sunset_posted_footer(); ?>
    </div><!-- class="content-footer blog-footer" -->
  </footer><!-- class="entry-footer content-footer-wrapper" -->

</article>
