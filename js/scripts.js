
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

//Redirect after submit
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://localhost/candles_community_project/success-message/';
}, false );


//form for mobile
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block"; //current tab position
  //... and fix the Next button:
  console.log(x.length); //5
  console.log(n);

  if (n == (x.length-1)) {
    document.getElementById("nextBtn").style.display ="none";
    //document.getElementById("nextBtn").setAttribute('type','submit');
  } else {
    document.getElementById("subBtn").style.display ="block";
    //document.getElementById("nextBtn").setAttribute('type','button');
  }
 
}

function getLookingFor() {
  return jQuery('input[name=radio-281]:checked', '.wpcf7-form').val();
}

function next() {
  // This function will figure out which tab to display
  var tabs = document.getElementsByClassName("tab");
  // Hide the current tab:
  tabs[currentTab].style.display = "none";
  var lookingFor = getLookingFor();
  var nextTab = currentTab + 1;
  if (lookingFor == "a mentor" && currentTab == 2) {
    nextTab = 4;
  } else if (lookingFor == "mentored" && currentTab == 1) {
    nextTab = 3;
  }
  // Set the current tab to the next tab:
  currentTab = nextTab;
  // if you have reached the end of the form...
  // if (currentTab >= tabs.length) {
  //   // ... the form gets submitted:
  //   document.getElementsByClass("wpcf7-form").submit();
  //   return false;
  // }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

document.querySelector("#nextBtn").addEventListener("click",function(event) {
  next();
});


})(jQuery);

