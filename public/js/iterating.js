(function(){
    "use strict";

    var peoplesNames = ["Luis", "Ryan", "Will", "Zach"]
    // TODO: Create an array of 4 people's names using literal array notation, in a variable called 'names'.
    console.log(peoplesNames.length);
    // TODO: Create a log statement that will log the number of elements in the names array.
       
    	var element;


        for (var i = 0; i < peoplesNames.length; i +=1) {
			element = peoplesNames [i];
			console.log(peoplesNames[i]);
		}

		
		// foreach loop

		console.log("----------")

		peoplesNames.forEach(function (element, index, array) {


			console.log(element);
		});

		console.log("----------")


		//or


		// var element;

		// element = names[0];
		// console.log(element);

		// element = names[1];
		// console.log(element);

		// element = names[2];
		// console.log(element);

		// element = names[3];
		// console.log(element);

		

		//****CHALLENGE****
		// make a new array of the names in reverse order

		var namesInReverseOrder = ["Alice","Bob", "Candy", "Dawn"];
		console.log(namesInReverseOrder.length);
		console.log(namesInReverseOrder.reverse());

		
			



    // TODO: Create log statements that will print each of the names array elements individually.
})();
