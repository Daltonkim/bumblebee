
jQuery(function ($) {

    $(window).ready(function (event) {


        $(".related-posts").slick({
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