"use strict";

$(window).load(function(){
	if($('.same-height-block').length){
		$('.same-height-block').matchHeight(); // For same height of boxes
	};
});
// Document Ready
$(document).ready(function(){
	// Jquery Selectbox
	if($('.js-selectbox').length){
		$('.js-selectbox').selectpicker({
			style: 'btn-select',
			size: 4
		});
	};
});