'use strict';

// objects combine state and behaviour.

// 	an object is a grouping of data and functionality. 
// data items contained in an object are referred to as properties, 
// and functions on an object are referred to as methods.

// methods 
//  -functions that live on object.
//  // old method
//  var car = new Object();

//  console.log(typeof car);
//  //"object"

 // object literal Notation
 var rollFunnyDie = function() {
 	return Math.ceil(Math.random() * 20);
 };

var die = {};
die.value = 1;
die.numberOfSides = 6;
die.color = "red";
die.rollDie = function() {
	return Math.ceil(Math.random() * this.numberOfSides);
};

// var firstRoll = die.rollDie();
// var secondRoll = die.rollDie();
// var thirdRoll = die.rollDie();

var die = {
	"value": 1,
	"numberOfSides": 6,
	"color": "red",
	"rollDie": function(){
		return Math.ceil(Math.random() * this.numberOfSides);
	}
}