
(function($) {
$(document).ready(function(){
  var scrollTop = 0;
  $(window).scroll(function(){
    scrollTop = $(window).scrollTop();
    
    if (scrollTop >= 10) {
      $('.nav-full-height').addClass('scrolled-nav');
    } else if (scrollTop <= 10) {
      $('.nav-full-height').removeClass('scrolled-nav');
    } 
    
  }); 
  
}); 
})(jQuery);


// fullscreen navigation mobile

function openNav() {
    document.getElementById("mobile-navigation").style.display = "block";
}

function closeNav() {
    document.getElementById("mobile-navigation").style.display = "none";
}