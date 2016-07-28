"use strict";

// This is how you get a random number between 50 and 100
var allCones = Math.floor(Math.random() * 50) + 50;
	console.log("I have " + allCones);
// This is how you get a random number between 1 and 5

	
//

//

do { 
		var cones = Math.floor(Math.random() * 5) + 1;
	if (allCones >= cones){

		
			console.log("somone bought " + cones);
		allCones = allCones - cones;
		console.log(allCones + " are left");

	} else{
		console.log("dont have enough");
	};	
} while (allCones > 0);

// Question No.2
 
 var i = 1

 while (i < 65536) {
  i = i * 2
 console.log(i);
}




