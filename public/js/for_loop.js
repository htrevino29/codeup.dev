

"use strict";

var numberAsString;
for(var i=1; i<=10; i+=1) {
	numberAsString = i.toString();
	numberAsString = numberAsString[numberAsString.length-1]
	console.log(numberAsString.repeat(i));
    
}
// var string = [1 - 1]
	// string = string.toString();
	// console.log(string.repeat(10))
// This is how you get a random number between 1 and 10
var number = Math.floor(Math.random() * 10) + 1;
	// console.log(number);
for (var i = 1; i <=10 ; i+=1) {
		// console.log(i);
	var solution = (number * i)
		console.log( number + " x " + i + " = " + solution );
}
	


