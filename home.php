<?php /* Main Template for the BLOG */ ?>


<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main blog-section" role="main">

    <div class="sunset-posts-container">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/content', get_post_format()); ?>
      <?php endwhile; endif; ?>
    </div><!-- class="sunset-posts-container -->


    <div class="button-container">
      <a class="btn btn-default sunset-load-more" data-page="1" data-url="<?php echo admin_url('admin-ajax.php'); ?>"><i class="fa fa-refresh" aria-hidden="true">&nbsp;</i><?php _e('Load More'); ?></a>
    </div><!-- class="button-container" -->

  </main><!-- id="main" class="site-main" -->
</div><!-- id="primary" class="content-area" -->

<?php get_footer(); ?>
