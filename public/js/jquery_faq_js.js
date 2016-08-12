"use strict";
// (function(){

// $(document).ready(function () {
// 	$('dd').addClass('invisible');

// 	$('#toggle-answers').click(function() {
// 		$('dd').toggleClass('invisible');
// 	});
// });


//Create jQuery code that makes the first li element in each ul have font-weight: bold.

// $('ul').each(function(index) {
//     //will loop through each group of UL
//     $(this).children().first().css('font-weight', 'bold');
//     //"this" grabs a specific UL 
// });

// $('li').click(function() {
//     $(this).parent().addClass('invisible');
    
// });

//Update the code that uses the invisible class to 
//hide and show dd elements to instead use the .toggle() method.


$(document).ready(function () {
	$('dd').addClass('invisible');

	$('#toggle-answers').click(function() {
		$('dd').fadeToggle();
	});
});


$('h3').click(function() {
    $(this).parent().children('ul').children('li').hide();
    
});

