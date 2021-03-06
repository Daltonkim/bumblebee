jQuery(function ($) {


    // (function() {
    //     'use strict';
      
    //     var btnScrollDown =$(this).find('.down');
      
    //     function scrollDown() {
    //       var windowCoords = document.documentElement.clientHeight;
    //       (function scroll() {
    //         if (window.pageYOffset < windowCoords) {
    //           window.scrollBy(0, 10);
    //           setTimeout(scroll, 0);
    //         }
    //         if (window.pageYOffset > windowCoords) {
    //           window.scrollTo(0, windowCoords);
    //         }
    //       })();
    //     }
      
    //     btnScrollDown.addEventListener('click', scrollDown);
    //   })();
      

    $(window).ready(function (event) {

        //tabs code
        console.log('tabs code here')
        $('img.eve-image').on('bestfit', function () {
            var css;
            var ratio = $(this).width() / $(this).height();
            var pratio = $(this).parent().width() / $(this).parent().height();
            if (ratio < pratio) css = {
                width: 'auto',
                height: '100%'
            };
            else css = {
                width: '100%',
                height: 'auto'
            }; 
            $(this).css(css);
        }).on('load', function () {
            $(this).trigger('bestfit');
        }).trigger('bestfit');

        $(".news__container").slick({
            autoplay: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: false,
            swipe: true,
            draggable: true,
            customPaging: function (slider, i) {
                var thumb = $(slider.$slides[i]).data();
                return '<a>0' + (i + 1) + '.</a>';
            },
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        dots: false,
                        arrows: false,
                        infinite: true,


                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false,
                        infinite: true,


                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false,
                        infinite: true,


                    }
                },
               

            ]
        });

        $(window).on('resize', function () {
            $('.news__container').slick('resize');
        });
    });

});
