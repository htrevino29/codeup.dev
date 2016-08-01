<!doctype>
Review cones </3

"use strict";

// This is how you get a random number between 50 and 100
var allCones = Math.floor(Math.random() * 50) + 50;

// This is how you get a random number between 1 and 5
var cones = Math.floor(Math.random() * 5) + 1;

// do sell cones
do{
	// if i have enough cones, remove cones from inventory
	if(allCones >= cones) {
		// update inventory to be old inventory minus what we just sold
		allCones = allCones - cones;
		// console.log how many we sold
		console.log("I sold " + cones + " number of ice cream cones!");
	// else
	} else {
		console.log("cannot sell you " + cones + ". I only have " + allCones);
	}
} while ( allCones > 0);
console.log("I sold them all")