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
                    breakpoint: 1008,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        dots: false,
                        arrows: false,
                        infinite: true,


                    }
                }

            ]
        });

        $(window).on('resize', function () {
            $('.news__container').slick('resize');
        });
    });

});
