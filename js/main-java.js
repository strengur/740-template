// Function to fade top menu to dark smoothlie at sudden point
window.onscroll = basedOnWindowScrolling;

function basedOnWindowScrolling () {
	var position = window.pageYOffset;

	// Turn menu to dark grey
	if (position > 58) {
		$(".menu-items").css("background-color", "#fff").css("transition-duration", "1s");
	} else {
		$(".menu-items").css("background-color", "rgba(255,255,255,0.1)");
	}

	// Shrink the logo
	if (position > 60) {
		$(".logo img").css("width" , "105");
		console.log();
	} else {
		var i = 163;
		i -= window.pageYOffset;
		if (i >= 104) {
			$(".logo img").css("width" , i);
		}
	}
}


// Make "Welcom message" disappear and contact form appear at same time

// $("#display-contact-form").click(function() {
// 	$(".landing-welcome").fadeOut(1500);
// 	$(".landing-contact").fadeIn(1500);
// });

// Function to move up/down the page more smoothlie
/*
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
*/
