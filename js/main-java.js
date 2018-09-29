// Function to fade top menu to dark smoothlie at sudden point
window.onscroll = basedOnWindowScrolling;

function basedOnWindowScrolling () {
	var position = window.pageYOffset;

	// Turn menu to dark grey
	if (position > 58) {
		jQuery(".menu-items").css("background-color", "#fff").css("transition-duration", "1s");
	} else {
		jQuery(".menu-items").css("background-color", "rgba(255,255,255,0.1)");
	}

	// Shrink the logo
	if (position > 60) {
		jQuery(".logo img").css("width" , "105");
		console.log();
	} else {
		var i = 163;
		i -= window.pageYOffset;
		if (i >= 104) {
			jQuery(".logo img").css("width" , i);
		}
	}
}

jQuery('.mobile img').click(function() {
	jQuery('.hide-mobile-menu').slideToggle(500, 'swing');
	jQuery('.mobile img').toggleClass('mobile-image-rotate');
});
