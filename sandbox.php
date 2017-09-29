<?php foreach ($attachments as $attachment) : ?>
  <div class="item active background-image" style="background-image: url(<?php echo wp_get_attachment_url($attachment->ID); ?>);"></div>
<?php endforeach; ?>


<li class="glide__slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/img1.jpg"></li>
<li class="glide__slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/img2.jpg"></li>
<li class="glide__slide"><img src="<?php echo get_template_directory_uri(); ?>/images/slider/img3.jpg"></li>
