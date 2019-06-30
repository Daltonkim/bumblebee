jQuery(function ($) {

    $(window).ready(function (event) {

        $('img.eve-image').on('bestfit', function () {
            var css;
            var ratio = $(this).width() / $(this).height();
            var pratio = $(this).parent().width() / $(this).parent().height();
            if (ratio < pratio) css = {
                width: '30%',
                height: '100%'
            };
            else css = {
                width: '30%',
                height: 'auto'
            };
            $(this).css(css);
        }).on('load', function () {
            $(this).trigger('bestfit');
        }).trigger('bestfit');

        $(".slider_home").slick({
            autoplay: true,
            dots: true,
            swipe: true,
            draggable: true,
            infinite: true,
            arrows: true,
            slidesToShow: 3,
            slidesToScroll: 3,

            // customPaging: function (slider, i) {
            //     var thumb = $(slider.$slides[i]).data();
            //     return '<a>0' + (i + 1) + '.</a>';
            // },
            // responsive: [{
            //         breakpoint: 1400,
            //         settings: {
            //             slidesToShow: 3,
            //             slidesToScroll: 3,
            //             dots: true,
            //             arrows: true,
            //             infinite: true,


            //         }
            //     },
            //     {
            //         breakpoint: 1008,
            //         settings: {
            //             slidesToShow: 3,
            //             slidesToScroll: 3,
            //             dots: true,
            //             arrows: false,
            //             infinite: true,


            //         }
            //     }

            // ]


        });

        $(window).on('resize', function () {
            $('.slider_home').slick('resize');
        });

    });

});