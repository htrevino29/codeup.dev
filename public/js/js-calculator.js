'use strict';

console.log("linked");



// listening for clicks
var listener = function (event) {
	console.log(this.value)
 // alert('You clicked the button!');
};

// fill boxes with numbers or operators accordingly
var LeftBox = function(){
	var MiddleBox = document.getElementById('MiddleBox').getAttribute('value');
	if	(MiddleBox === ''){
		var displayValue = document.getElementById('LeftBox').getAttribute('value');
		var	numbers = this.innerText;
		var	newValue = displayValue + numbers;
			console.log(newValue);
			document.getElementById('LeftBox').setAttribute("value",newValue);
	} else {
		var displayValue = document.getElementById('RightBox').getAttribute('value');
		var	numbers = this.innerText;
		var	newValue = displayValue + numbers;
			console.log(newValue);
		document.getElementById('RightBox').setAttribute("value",newValue);
	}
};

//left box numbers
var numbers = document.getElementsByClassName('btns');
	console.log(numbers);
for (var i = 0; i < numbers.length; i++) {
	numbers[i].addEventListener('click',LeftBox);
};



// middle box "operators"
var numbers = document.getElementsByClassName('operators');
	console.log(numbers);
for (var i = 0; i < numbers.length; i++) {
numbers[i].addEventListener('click',MiddleBox);
};

function MiddleBox(){
var	numbers = this.innerText;
	console.log(numbers);
	document.getElementById('MiddleBox').setAttribute("value",numbers);
};




// clear calculator
// function clearClicked () {
//     display.value = '';
// }
// var clear   = document.getElementById('clear');
// var display = document.getElementsByClassName('display');
// clear.addEventListener('click', 'clearClicked');










