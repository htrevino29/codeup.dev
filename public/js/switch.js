"use strict";

var luckyNumber = Math.floor(Math.random()* 6)
	console.log(luckyNumber);
var price1 = (60 - (60 * .1))
var price2 = (60 - (60 * .25))
var price3 = (60 - (60 * .35))
var price4 = (60 - (60 * .50))

switch (luckyNumber) {
    case 0 :
        console.log("you no discount");
        break;
    case 1 :
        console.log("You get a 10% discount your total is $" + price1);
        break;
    case 2 :
        console.log("You get 25% off your total is $" + price2);
        break;
    case 3 :
    	console.log("you get 35% off your total is $" + price3)
    	break;
    case 4 :
        console.log("You get 50% off your total is $" + price4);
        break;
    case 5 :
        console.log("you get it all for FREE!");
        break;
    
}

// question 2
switch (luckyNumber) {
	case 0 :
		console.log("Jan")
		break;
	case 1 :
		console.log("Feb")
		break;
	case 2 :
		console.log("Mar")
		break;
	case 3 :
		console.log("Apr")
		break;
	case 4 :
		console.log("May")
		break;
	case 5 :
		console.log("Jun")
		break;
}

