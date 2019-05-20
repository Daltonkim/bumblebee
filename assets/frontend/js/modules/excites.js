jQuery(function ($) {

  $(window).ready(function (event) {

    $(".excitement__card, .excitement__card-2, .testimony__detail-button, .excitement__card-3").hover(over, out);
    $show = $(this).find('.title_1,.title_2 ,.title_3, .desc_1, .desc_2, .desc_3');


    $(".excitement__card").click(function () {
      TweenMax.staggerTo(('.title_1, .desc_1'), 0.4, {
        y: 0,
        autoAlpha: 1,
        display: 'block',
        ease: Power4.easeInOut
      }, 0.1);
      TweenMax.staggerTo(('.title_2, .desc_2'), 0.4, {
        y: 0,
        autoAlpha: 1,
        display: 'none',
        ease: Power4.easeInOut
      }, 0.1);
      TweenMax.staggerTo(('.title_3, .desc_3'), 0.4, {
        y: 0,
        autoAlpha: 1,
        display: 'none',
        ease: Power4.easeInOut
      }, 0.1);
    });

    $(".excitement__card-2").click(function () {
      TweenMax.staggerTo(('.title_2, .desc_2'), 0.4, {
        y: 0,
        autoAlpha: 1,
        display: 'block',
        ease: Power4.easeInOut
      }, 0.1);
      TweenMax.staggerTo(('.title_1, .desc_1'), 0.4, {
        y: 0,
        autoAlpha: 1,
        display: 'none',
        ease: Power4.easeInOut
      }, 0.1);
      TweenMax.staggerTo(('.title_3, .desc_3'), 0.4, {
        y: 0,
        autoAlpha: 1,
        display: 'none',
        ease: Power4.easeInOut
      }, 0.1);
    });

    $(".excitement__card-3").click(function () {
      TweenMax.staggerTo(('.title_3, .desc_3'), 0.4, {
        y: 0,
        autoAlpha: 1,
        display: 'block',
        ease: Power4.easeInOut
      }, 0.1);
      TweenMax.staggerTo(('.title_1, .desc_1'), 0.4, {
        y: 0,
        autoAlpha: 1,
        display: 'none',
        ease: Power4.easeInOut
      }, 0.1);
      TweenMax.staggerTo(('.title_2, .desc_2'), 0.4, {
        y: 0,
        autoAlpha: 1,
        display: 'none',
        ease: Power4.easeInOut
      }, 0.1);

    });

    TweenMax.set($('.excitement__line'), {
      y: 0
    });
    TweenMax.set($('.excitement__excerpt, .title_1,.title_2 ,.title_3'), {
      y: 0,
      autoAlpha: 0,
      ease: Power4.easeInOut
    });
    TweenMax.set($(' .title_1,.title_2 ,.title_3, .desc_1, .desc_2, .desc_3'), {
      y: 0,
      autoAlpha: 0,
      display: 'none',
      ease: Power4.easeInOut
    });

    function over() {
      $items = $(this).find('.excitement__line');
      $desc = $(this).find('.excitement__excerpt');
      $btn = $(this).find('.testimony__detail-button-textt');

      TweenLite.to($btn, 1, {
        css: {
          color: "#ffda00"
        },
        ease: Back.easeOut
      });
      TweenMax.staggerTo($items, 0.4, {
        y: 200,
        autoAlpha: 1,
        ease: Power4.easeInOut
      }, 0.1);
      TweenMax.staggerTo($desc, 0.4, {
        y: 0,
        autoAlpha: 1,
        ease: Power4.easeInOut
      }, 0.1);
    }

    function out() {
      $items = $(this).find('.excitement__line');
      $desc = $(this).find('.excitement__excerpt');
      TweenMax.staggerTo($items, 0.4, {
        y: 0,
        autoAlpha: 1,
        ease: Power4.easeInOut
      }, 0.1);

      TweenMax.staggerTo($desc, 0.4, {
        y: 70,
        autoAlpha: 0,
        ease: Power4.easeInOut
      }, 0.1);
    }
  });

  // cards hover effect
  $('.excitement-grid_card').hover(
    function() {
      var img = $(this).find('.excitement-grid_card-img');
      var imghover = $(this).find('.excitement-grid_card-imghover');
      img.css("display", "none");
      imghover.css("display", "block");
    },
    function(){
      var img = $(this).find('.excitement-grid_card-img');
      var imghover = $(this).find('.excitement-grid_card-imghover');
      img.css("display", "block");
      imghover.css("display", "none");
    }
  );

});