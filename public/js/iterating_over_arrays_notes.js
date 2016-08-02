(function(){
    "use strict";

    var peoplesNames = ["Luis", "Ryan", "Will", "Zach"]

    console.log("the array is " + names.lenth + "items long");
    var element;

    for(var i = 0; i < names.lenth; i+=1) {
    	element = names[i];
    	console.log(element);

	}

    // forEach loop that runs on an array
    // function (){}

    peoplesNames.forEach(function(element, index, array){
    		console.log(element == array[index]);
    		console.log(element == names[index]);
    		console.log(element);


	});


})();