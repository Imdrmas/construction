let scrollToTopBtn = document.getElementById("scrollToTopBtn");

// Show the button when scrolling down 20px from the top of the document
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollToTopBtn.style.display = "block";
  } else {
    scrollToTopBtn.style.display = "none";
  }
}

// Scroll to the top of the document when the user clicks the button
scrollToTopBtn.onclick = function () {
  window.scrollTo({ top: 0, behavior: "smooth" });
};

/* End Scroll TO UP*/

  document.addEventListener("DOMContentLoaded", function() {
    function animateValue(id, start=0, end=0, duration) {
        const obj = document.getElementById(id);

        if (!obj) {
          console.error('Element not found!');
          return;
      }
        const range = end - start;
        const minTimer = 50; // minimum time interval in milliseconds

        const stepTime = Math.abs(Math.floor(duration / range));

        const timer = setInterval(() => {
          if(start!=null){
            obj.textContent = start += 1;
            
            if (start >= end) {
                clearInterval(timer);
            }
          }
        }, Math.max(stepTime, minTimer));
    }
    
    // Start the animation when the DOM is fully loaded
    animateValue("project", 0, 345, 2000);
    animateValue("happyClient", 0, 2478, 2000);
    animateValue("qualifiedStaff", 0, 413, 2000);
    animateValue("homeProject", 0, 345, 2000);
    animateValue("homeClient", 0, 2478, 2000);
    animateValue("homeQualifiedStaff", 0, 413, 2000);
    animateValue("homeMachiniers", 0, 3479, 2000);
});

/**************** End Counter */

$(document).ready(function() {
  $('.portfolio .nav-item').click(function() {
    // Remove 'active' class from all nav-link divs
    $('.portfolio .nav-link').removeClass('active');
    // Add 'active' class to the clicked nav-link div
    $(this).find('.nav-link').addClass('active');
    
    // Get target ID from data-target attribute
    var target = $(this).data('target');
    
    // Remove 'show active' classes from all tab panes
    $('.portfolio .tab-pane').removeClass('show active');
    // Add 'show active' classes to the target tab pane
    $(target).addClass('show active');
  });
});

$(document).ready(function() {
  $('.home .nav-item').click(function() {
    // Remove 'active' class from all nav-link divs
    $('.home .nav-link').removeClass('active');
    // Add 'active' class to the clicked nav-link div
    $(this).find('.nav-link').addClass('active');
    
    // Get target ID from data-target attribute
    var target = $(this).data('target');
    
    // Remove 'show active' classes from all tab panes
    $('.home .tab-pane').removeClass('show active');
    // Add 'show active' classes to the target tab pane
    $(target).addClass('show active');
  });
});

/*************** End TABS */






