jQuery(function ($) {

    $(window).ready(function(){

      });
});

jQuery(function ($) {

  $(".related-posts").slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      arrows: false,
      dots: false,
      responsive: [{
              breakpoint: 992,
              settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                  dots: false,
                  arrows: false,
                  infinite: true,
                  centerMode: true
              }
          },
          {
              breakpoint: 768,
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  dots: false,
                  arrows: false,
                  infinite: true,
                  centerMode: true
              }
          }

      ]
  });

});
