"use strict";
// (function(){

// $("dt").toggle();


// $( "h1" ).click(function() {
// 	$('dd').toggle();
// 	$('dt').toggle();
    
//   });

// });

$(document).ready(function () {
	$('dd').addClass('invisible');

	$('#toggle-answers').click(function() {
		$('dd').toggleClass('invisible');
	});
});
