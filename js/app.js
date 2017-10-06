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

 // Variable Declarations
  var carousel = '.sunset-carousel-thumb';
  var last_scroll = 0;

  // LOOP THROUGH ELEMENTS ON EACH GALLERY POST
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

  /* Scroll Functions */
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();

    if (Math.abs(scroll - last_scroll) > $(window).height()*0.1) {
      last_scroll = scroll;
      $('.page-limit').each(function(index){
        if (isVisible($(this))) {
          history.replaceState(null, null, $(this).attr("data-page"));
          return (false);
        }
      });
    }

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

  function isVisible(element) {
    var scroll_pos = $(window).scrollTop();
    var window_height = $(window).height();
    var el_top = $(element).offset().top;
    var el_height = $(element).height();
    var el_bottom = el_top + el_height;
    return ((el_bottom - el_height * 0.25 > scroll_pos) && (el_top < (scroll_pos + 0.5 * window_height)));
  }

}); //jQuery(document).ready(function($)




