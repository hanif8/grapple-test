jQuery(document).ready(function($){
	setTimeout(function(){
	  $('.overlay-transition').addClass('loaded');
	}, 3000);

	// Clone tickets
	var e = $('.scroll-section .ticket');
	for (var i = 0; i < 15; i++) {
	  e.clone().insertAfter(e);
	}
});