<?php /* Gallery Post Format */ ?>


<article id="post-<?php the_ID(); ?>" <?php post_class('sunset-format-gallery'); ?>>

  <!-- CONTENT HEADER -->
  <header class="entry-header content-header blog-header">
    <div class="content-header-wrapper">
      <?php if (sunset_get_attachment()) : ?>
        <?php
        $attachments = sunset_get_attachment(7);
        //var_dump($attachments);
        ?>
      <!-- CAROUSEL -->
      <section id="post-gallery-<?php the_ID(); ?>">
        <div id="Glide" class="glide">
          <!-- ARROWS -->
          <div class="glide__arrows" role="listbox">
              <button class="glide__arrow container prev" data-glide-dir="<">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
                <span class="thumbnail-container background-image"></span>
              </button>
              <button class="glide__arrow container next" data-glide-dir=">">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
                <span class="thumbnail-container background-image"></span>
              </button>
          </div><!-- class="glide__arrows" -->

          <!-- SLIDES -->
          <div class="glide__wrapper">
            <ul class="glide__track">
            <?php
              $count = count($attachments) - 1;
              for ($i = 0; $i <= $count; $i++) :
                $active = ($i == 0 ? ' active' : '');
                $n = ($i == $count ? 0 : $i+1);
                $nextImg = wp_get_attachment_thumb_url($attachments[$n]->ID);
                $p = ($i == 0 ? $count : $i-1) ;
                $prevImg = wp_get_attachment_thumb_url($attachments[$p]->ID);
            ?>
              <li class="glide__slide <?php echo $active; ?>">
                <img src="<?php echo wp_get_attachment_url($attachments[$i]->ID); ?>">
                <div class="hide prev-image-circle" data-image="<?php echo $prevImg ?>"></div>
                <div class="hide next-image-circle" data-image="<?php echo $nextImg ?>"></div>
              </li>
            <?php endfor; ?>
            </ul><!-- class="glide__track" -->
          </div><!-- class="glide__wrapper" -->

          <!-- BULLETS -->
          <div class="glide__bullets"></div>
        </div>
      </section>

      <?php endif; ?>

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
