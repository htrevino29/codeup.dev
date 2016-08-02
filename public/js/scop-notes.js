'use strict';

//definitions

//procedual
//hoisting
//two different ways to define a functions
//same for functions
//hoisiting issues with the variable version
//avoid it by following best practices and declaring variables at the start of the scope you use them in.


// global variable -- variable defined outside of a function
// 	- part of the window object
// 	- in the global namespace
// 	- accessable from anywhere (inside functions)

// local variables overrite variables in their scope, not globally
// local variable -- variable defined inside a function
// scope -- where a variable can be accessed -- curly braces of a function
var pizza = 'pineapple, onion, hot sauce, and extra cheese';

function tellMeAboutPizza(){
	console.log(pizza);

}

tellMeAboutPizza;










////////////

console.log(sayHello('zach'));


function sayHello (name){
	return 'hello' + name;

}




// iife -- immediately invoked function expression
// (fucntion(){your code goes here})()
// protects our code eg sensitive variables

//.js file
'use strict';

(function(){
	
	//code

})()
	//EOF











