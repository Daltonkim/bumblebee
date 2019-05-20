jQuery(function ($) {

    $(window).ready(function (event) {

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

        $(".history_slider").slick({
            autoplay: true,
            dots: true,
            swipe: true,
            draggable: true,
            customPaging: function (slider, i) {
                var thumb = $(slider.$slides[i]).data();
                return '<a>0' + (i + 1) + '.</a>';
            },
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false,
                        infinite: true,


                    }
                },
                {
                    breakpoint: 1008,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false,
                        infinite: true,


                    }
                }

            ]
        });

        $(window).on('resize', function () {
            $('.history_slider').slick('resize');
        });
    });

});
