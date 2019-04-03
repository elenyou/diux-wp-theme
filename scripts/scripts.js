var $j = jQuery.noConflict();

$j(document).ready(function() {
    // Transition effect for navbar
    $j(window).scroll(function() {
      // checks if window is scrolled more than 500px, adds/removes solid class
      if ($j(this).scrollTop() > 50) {
        $j(".header-custom").addClass("solid");
      } else {
        $j(".header-custom").removeClass("solid");
      }
    });
  });


