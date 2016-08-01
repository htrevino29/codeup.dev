"use strict";



// Question 1
var average = (70 + 80 + 95) / 3
// console.log(average)
if (average >= 80) {
	
    // code here gets executed if condition evaluates to true
    
    console.log("you're awesome")

} else {
    // code here gets executed if condition evaluates to false
    console.log("you need more practice more")
}



console.log("         ")


var average = (70 + 80 + 95) / 3


// takes in 3 grades, calculates average, checks average vs. passing grade
function gradeStudent (grade1, grade2, grade3) {
	//average 3 grades
	var average = (grade1 + grade2 + grade3) / 3;
	if (average >= 80) {
	
    // code here gets executed if condition evaluates to true
    
    	return "You're awesome!";

	} else {
    // code here gets executed if condition evaluates to false
    	return "You need more practice more.";
	}
}

console.log(gradeStudent(75, 90, 80));
console.log(gradeStudent(25, 100, 70));
console.log(gradeStudent(80, 85, 78));








// Question 2
// input - figure out what inputs change and make generally named parameters
// proces - we already have the process;
// output - we already have the output, but not in a general form

	
	///


function showPersonSaleAndDiscount(person, salesAmount, discountPercentage, discountBreakpoint) {
	var finalAmount;
	if(salesAmount > discountBreakpoint) {
		finalAmount = salesAmount - (salesAmount * discountPercentage);
		return person + " purchased $" + salesAmount + " and a discount was applied. Final amount is: $" + finalAmount;
	} else {
		finalAmount = salesAmount;
		return person + " purchased $" + salesAmount + " and a discount was NOT applied. Final amount is: $" + finalAmount;
	}
}
var cam = showPersonSaleAndDiscount("Cam", 180, 0.35, 200);
console.log(cam);
var ryan = showPersonSaleAndDiscount("Ryan", 250, 0.35, 200);
console.log(ryan);
var george = showPersonSaleAndDiscount("George", 320, 0.35, 200);
console.log(george);

console.log("      ")




var person = "Cam";
var salesAmount = 180;
var discount = 0.35;
var finalAmount;
var message;

if(salesAmount > 200) {
	finalAmount = salesAmount - (salesAmount * discount);
	console.log(person + " purchased $" + salesAmount + " and a discount was applied. Final amount is: $" + finalAmount);
} else {
	finalAmount = salesAmount;
	console.log(person + " purchased $" + salesAmount + " and a discount was NOT applied. Final amount is: $" + finalAmount);
}

person = "Ryan";
salesAmount = 250;

if(salesAmount > 200) {
	finalAmount = salesAmount - (salesAmount * discount);
	console.log(person + " purchased $" + salesAmount + " and a discount was applied. Final amount is: $" + finalAmount);
} else {
	finalAmount = salesAmount;
	console.log(person + " purchased $" + salesAmount + " and a discount was NOT applied. Final amount is: $" + finalAmount);
}

person = "George";
salesAmount = 320;

if(salesAmount > 200) {
	finalAmount = salesAmount - (salesAmount * discount);
	console.log(person + " purchased $" + salesAmount + " and a discount was applied. Final amount is: $" + finalAmount);
} else {
	finalAmount = salesAmount;
	console.log(person + " purchased $" + salesAmount + " and a discount was NOT applied. Final amount is: $" + finalAmount);
}


///

//question 3


// returns a random number between 0 and 1
function flipACoin() {
	var flipACoin = Math.floor(Math.random()* 2);
	return flipACoin;
}

function shouldBuyHouseOrCar() {
	if (flipACoin() == 0) {
		console.log("Issac buys a car");
	} else {
		console.log("issac buys a house");
	}
}


console.log(shouldBuyHouseOrCar());
console.log(shouldBuyHouseOrCar());
console.log(shouldBuyHouseOrCar());
console.log(shouldBuyHouseOrCar());


 



