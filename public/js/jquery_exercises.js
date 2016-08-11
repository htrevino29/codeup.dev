"use strict";

$(document).ready(function() {

////////////////exercise 4.1.1/////////////////////
//     // alert( 'The DOM has finished loading!' );

// //grabs jello id and alerts the contents
//     var contents = $('#jello').html();
//     // alert(contents);

///////////////exercise 4.1.2/////////////////////

// //
// $('.codeup').css('border-style', 'solid');
// $('.codeup').css('border-color', 'red');
// $('.codeup').css('border-width', '1px');


///////////// exercise 4.1.3//////////////////////

	// $('li').css('font-size', '20px');

//Craft selectors that highlight all the h1, p, and li elements with a yellow background.
	// $('h1').css('background-color', 'yellow');
	// $('p').css('background-color', 'yellow');
	// $('li').css('background-color', 'yellow');
//Create a jQuery statement to alert the contents of your h1 element(s).
	// var headerContent= $('h1').html();
    // alert(headerContent);

///////////// exercise 4.1.4//////////////////////

//Combine your selectors that highlight all the h1, p, and li elements.

	// $('h1, p, li').css('background-color', 'yellow');

$('h1').click(
    function() {
        $(this).css('background-color', 'orange');
    }
   
);

$('p').dblclick(
    function() {
        $(this).css('font-size', '18px');
    }
    
);

$('li').hover(
    function() {
        $(this).css('background-color', 'green');
    },
    function() {
        $(this).css('background-color', 'white');
    }
);




















});