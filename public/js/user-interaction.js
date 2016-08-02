"use strict";

// TODO: Ask the user for their name.
//       Keep asking if an empty input is provided.
var response = prompt('what is your name?')
	while (response === ""){
		response = prompt('yea but whats your name')
	} 
	

// TODO: Show an alert message that welcomes the user based on their input.
alert('welcome ' + response)
// TODO: Ask the user if they like pizza.
//       Based on their answer show a creative alert message.
var confirmed = confirm("Do you dig pizza pie?")
	if(confirmed){
		alert("ohhhhh yeaa!")
	} else {
		alert('well we got pizza anyway!')
	}
