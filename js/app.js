jQuery(document).ready(function($){

  // GLIDE SLIDER SETUP
  $("#Glide").glide({
    type: 'carousel',
    // autoplay: 10000,
    padding: 0,
    autoplay: false,
    animationDuration: 1000,
    autoheight: true,
  });

  // ADD PREV NEXT THUMBS TO SLIDER
  $(document).on('mouseenter', '.container.next', function(){
    var nextThumb = $('.glide__slide.active').find('.next-image-circle').data('image');
    $(this).find('.thumbnail-container').css({'background-image' : 'url(' + nextThumb + ')'});
  });


  $(document).on('mouseenter', '.container.prev', function(){
    var prevThumb = $('.glide__slide.active').find('.prev-image-circle').data('image');
    $(this).find('.thumbnail-container').css({'background-image' : 'url(' + prevThumb + ')'});
  });





});




