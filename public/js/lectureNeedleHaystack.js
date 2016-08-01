"use strict";

// take a string and remove the spaces

// input => "hello there lassen"
// output => "hellotherelassen"

// takes a needed and a haystack
// returns true if the needle is in the haystack, otherwise false
function stringContains (haystack, needle) {
	var index = haystack.indexOf(needle);
	if (index === -1) {
		return false;

	} else {
		return true;
	}
}
// take a string as input
// return true if there is a " " in the string, otherwise false
function hasASpace ( stringToCheck) {
	var stringHasASpace = stringContains(stringToCheck, " ");
	return stringHasASpace;
}

//while the string has spaces

function removeSpaces ( phrase) {
	while (hasASpace(phrase)) {
		phrase = phrase.replace(" ", "");
	}

	return phrase;
}

var result = removeSpaces("hello there lassen! ");
//console.log(result);