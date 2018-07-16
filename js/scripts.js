// scroll down nav and add class
(function($) {
  $(document).ready(function() {

    var scrollTop = 0;
    $(window).scroll(function() {

      scrollTop = $(window).scrollTop();

    if (scrollTop >= 10) {
      $('.nav-full-height').addClass('scrolled-nav');

    } else if (scrollTop <= 10) {
      $('.nav-full-height').removeClass('scrolled-nav');
    } 

    if ($('scrolled-nav.logo').height() == 60) {
          $('.menu-menu-1-container').show();
    }
        else if ($('.scrolled-nav.logo').height() == 40){
          $('.scrolled-nav div.menu-menu-1-container').hide();        
        }
   }); 
  
 });


  //displaying username in step2 (where are you based)
  $("#email").focus(function(){
      var firstname = jQuery('#firstname').val();
      document.getElementById("username").innerHTML = firstname;
   });


  //Redirect after submit
  document.addEventListener('wpcf7mailsent', function(event) {
    location = 'http://localhost/candles_community_project/success-message/';
  }, false);


  //form for mobile
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the crurrent tab

  function showTab(n) {
    // This function will display the specified tab of the form...
    var tabs = document.getElementsByClassName("tab");
    tabs[n].style.display = "block"; //current tab position
    //... and fix the Next button:
    
    if (n == (tabs.length - 1)) {
      $("#nextBtn").hide();
      $("#subBtn").show();
      $("#nextarr").hide();
      $("#subarr").show();

    } else {
      $("#nextBtn").show();
      $("#subBtn").hide();
      $("#nextarr").show();
      $("#subarr").hide();

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
    if(lookingFor == "a mentor" && currentTab == 2) {
      nextTab = 4;
      
    } else if(lookingFor == "mentored" && currentTab == 1) {
      nextTab = 3;
    }
      
    // Set the current tab to the next tab:
    currentTab = nextTab;
    
    showTab(currentTab);
  }

  document.querySelector("#nextBtn").addEventListener("click", function(event) {
    next();
  });
  

})(jQuery);

