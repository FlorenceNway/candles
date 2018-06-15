
(function($) {
$(document).ready(function(){
  var scrollTop = 0;
  $(window).scroll(function(){
    scrollTop = $(window).scrollTop();
    
    if (scrollTop >= 10) {
      $('#desktop-navigation').addClass('scrolled-nav');
    } else if (scrollTop < 10) {
      $('#desktop-navigation').removeClass('scrolled-nav');
    } 
    
  }); 
  
}); 
})(jQuery);