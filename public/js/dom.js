"use strict";

var navbarLinkElements = document.getElementsByTagName('a');

var delay = 2000;
setTimeout(function () {
	for (var i = 0; i<navbarLinkElements.length; i++){
		var link = "http://mylittlepony.com";
		navbarLinkElements[i].setAttribute("href", link);
	
	}	
		// console.log(navbarLinkElements[i]);
		// navbarLinkElements[i].style.color="red";
		
}, delay);