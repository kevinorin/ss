"use strict";

// Window Ready
$(document).ready(function(){
	var winWidth = $(window).width();
	// For leftside menu
	var removeClass = true;
	
	$(".navbar-toggle").click(function () {
		$("body").toggleClass('sidebar-menu');
		removeClass = false;
	});
	
	$(".navbar-toggle").click(function() {
		removeClass = false;
	});

	$("html").click(function () {
		if (removeClass) {
			$("body").removeClass('sidebar-menu');
		}
		removeClass = true;
	});

	if($('.js-selectbox').length){
		$('.js-selectbox').selectpicker({
			style: 'btn-select',
			size: 4
		});
	};
});