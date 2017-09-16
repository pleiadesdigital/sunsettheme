<?php /* Main Template for the BLOG */ ?>


<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main blog-section" role="main">


      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/content', get_post_format()); ?>
      <?php endwhile; endif; ?>



  </main><!-- id="main" class="site-main" -->
</div><!-- id="primary" class="content-area" -->

<?php get_footer(); ?>