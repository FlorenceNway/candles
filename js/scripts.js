
 (function($) {
   $(document).ready(function(){

    console.log("hi");

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

//Redirect after submit
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://localhost/candles_community_project/success-message/';
}, false );

 })(jQuery);

