"use strict";

$(window).load(function(){
	if($('.same-height-block').length){
		$('.same-height-block').matchHeight(); // For same height of boxes
	};
});
// Document Ready
$(document).ready(function(){

	navfixed();

	// Jquery Selectbox
	if($('.js-selectbox').length){
		$('.js-selectbox').selectpicker({
			style: 'btn-select',
			size: 4
		});
	};

  	//Enable swiping...
	$(".carousel-inner").swipe( {
		//Generic swipe handler for all directions
		swipeLeft:function(event, direction, distance, duration, fingerCount) {
			$(this).parent().carousel('next'); 
		},
		swipeRight: function() {
			$(this).parent().carousel('prev'); 
		},
		//Default is 75px, set to 0 for demo so any distance triggers swipe
		threshold:0
	});


});

//Fixed nav bar on top
function navfixed(){
	$(window).bind('scroll', function() {
		if ($(window).scrollTop() <= 100) {
			$('.header-trans').addClass('navbar-transparent');
		}
		else {
		 	$('.header-trans').removeClass('navbar-transparent');
		}
	});
}