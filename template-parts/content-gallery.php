<?php /* Gallery Post Format */ ?>


<article id="post-<?php the_ID(); ?>" <?php post_class('sunset-format-gallery'); ?>>

  <!-- CONTENT HEADER -->
  <header class="entry-header content-header blog-header">
    <div class="content-header-wrapper">
      <?php if (sunset_get_attachment()) : ?>

      <!-- CAROUSEL -->
      <section id="post-gallery-<?php the_ID(); ?>">
        <div id="Glide" class="glide">
          <!-- ARROWS -->
          <div class="glide__arrows" role="listbox">
              <button class="glide__arrow container prev" data-glide-dir="<">
                <i class="fa fa-angle-left" aria-hid  den="true"></i>
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
            <?php $attachments = sunset_get_bs_slides(sunset_get_attachment(7)); ?>
              <?php foreach ($attachments as $attachment) { ?>
              <li class="glide__slide <?php echo $attachment['class']; ?>">
                <img src="<?php echo $attachment['url']; ?>">
                <div class="sunset-carousel-thumb">
                  <div class="hide prev-image-circle" data-image="<?php echo $attachment['prev_img']; ?>"></div>
                  <div class="hide next-image-circle" data-image="<?php echo $attachment['next_img']; ?>"></div>
                </div><!-- class="sunset-carousel-thumb" -->

                <!-- CAPTION -->
                <div class="image-caption">
                  <p><?php echo $attachment['caption']; ?></p>
                </div><!-- class="image-caption" -->
              </li>
              <?php } ?>
            </ul><!-- class="glide__track" -->
          </div><!-- class="glide__wrapper" -->

          <!-- BULLETS -->
         <!-- <div class="glide__bullets"></div> -->
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
