/**
 * Back to top
 */
jQuery(function ($) {
( function() {
  jQuery.fn.BackToTop = function( options ) {

      var defaults = {
          text: 'To Top',
          min: 200,
          inDelay: 600,
          outDelay: 400,
          mainContainerID: '.site-container', // parent element
          buttonID: '#gototop', // fading element id
          easingType: 'easeOutQuart',
          scrollSpeed: 1200
      },
      settings = jQuery.extend( defaults, options );

      jQuery( 'body' ).find( settings.buttonID ).on( 'click.UItoTop', function() {

          jQuery( 'html, body' ).animate({
              scrollTop: 0
          }, settings.scrollSpeed, settings.easingType );

          return false;
      });

      var controller = new ScrollMagic.Controller();
          new ScrollMagic.Scene({
               triggerElement: settings.mainContainerID,
               triggerHook: 'onLeave',
               offset: 400,
               reverse: true
           })
           .setClassToggle( settings.buttonID, 'back-to-top--visible' )
           .addTo( controller );
  };

}( jQuery ) );

jQuery().BackToTop({
    mainContainerID: '.site-container', // parent element
    buttonID: '#gototop', // fading element id
 });

});