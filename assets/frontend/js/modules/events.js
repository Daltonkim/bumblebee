jQuery(function ($) {

    var parallax = -0.2;
  
    var $bg_images = $('*[id="bg"]');

    var offset_tops = [];
    $bg_images.each(function(i, el) {
      offset_tops.push($(el).offset().top);
    });
    $(window).scroll(function() {
      var dy = $(this).scrollTop();
      $bg_images.each(function(i, el) {
        var ot = offset_tops[i];
        $(el).css("background-position", "50% " + (dy - ot) * parallax + "px");
      });
    });
    var $bg_i = $('*[class="qazana-element"]');

    $bg_i.each(function(i, el) {
      offset_tops.push($(el).offset().top);
    });
    $(window).scroll(function() {
      var dy = $(this).scrollTop();
      $bg_i.each(function(i, el) {
        var ot = offset_tops[i];
        $(el).css("background-position", "50% " + (dy - ot) * parallax + "px");
      });
    });
    
   
});