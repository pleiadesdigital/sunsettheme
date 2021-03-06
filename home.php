<?php /* Main Template for the BLOG */ ?>


<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main blog-section" role="main">

    <div class="sunset-posts-container">
      <?php if (have_posts()) : ?>
        <div class="page-limit" data-page="/<?php sunset_check_paged(); ?>">
        <?php while (have_posts()) : the_post();
          /*
          $class = 'reveal';
          set_query_var('post-class', $class);
          */
          get_template_part('template-parts/content', get_post_format());
        endwhile; ?>
        </div>
      <?php endif; ?>
    </div><!-- class="sunset-posts-container -->


    <div class="button-container">
      <a class="btn-sunset-load sunset-load-more" data-page="<?php echo sunset_check_paged(1); ?>" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
        <span class="sunset-icon sunset-loading"></span>
        <span class="text"><?php _e('Load More'); ?></span>
      </a>
    </div><!-- class="button-container" -->

  </main><!-- id="main" class="site-main" -->
</div><!-- id="primary" class="content-area" -->

<?php get_footer(); ?>



<!-- <i class="fa fa-refresh" aria-hidden="true">&nbsp;</i> -->
