jQuery(document).ready(function($){
  revealPosts()
  // GLIDE SLIDER SETUP
  $("#Glide").glide({
    type: 'carousel',
    // autoplay: 10000,
    padding: 0,
    autoplay: false,
    animationDuration: 1000,
    autoheight: true,
  });

  // LOOP THROUGH ELEMENTS ON EACH GALLERY POST
  var carousel = '.sunset-carousel-thumb';

  $(carousel).each(function(){
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

  // AJAX FUNCTIONS
  $(document).on('click', '.sunset-load-more:not(.loading)', function(){
    var that = $(this);
    var page = that.data('page');
    var newPage = page+1;
    var ajaxurl = that.data('url');

    that.addClass('loading').find('.text').slideUp(320);
    that.find('.sunset-icon').addClass('spin');

    $.ajax({
      url : ajaxurl,
      type : 'post',
      data: {
        page : page,
        action : 'sunset_load_more',
      },
      error : function(response){
        console.log(reponse);
      },
      success: function(response){
        setTimeout(function() {

          that.data('page', newPage);
          $('.sunset-posts-container').append(response);

          that.removeClass('loading').find('.text').slideDown(320);
          that.find('.sunset-icon').removeClass('spin');

          revealPosts();

        }, 1000);
      }
    });
  });

  /* Helper Functions */

  function revealPosts() {
    var posts = $('article:not(.reveal)');
    var i = 0;
    setInterval(function(){
      if (i >= posts.length) {
        return false;
      }
      var el = posts[i];
      $(el).addClass('reveal');/*.find('.sunset-carousel-thumb').carousel()*/
      i++;
    }, 200);
  }


}); //jQuery(document).ready(function($)




