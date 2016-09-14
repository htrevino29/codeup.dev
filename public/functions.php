<?php


// inputHas($key): returns true or false based on whether the key is available.
function inputHas($key) 
{
	if(isset($_REQUEST[$key])) {
		return true;
	}else {
		return false; 
	}
}
// inputGet($key): returns the value specified by the key, or null if the key is not set.
function inputGet($key) 
{
	if(inputHas($key) == true){
		return $_REQUEST[$key];
	} else {
		return null;
	}
}
// escape($input): returns the input as a safely escaped string.
function escape($input) 
{
	return htmlspecialchars(strip_tags($input));
}



// // session_start();
// // require_once "functions.php";
// // ^ this goes ontop of php file you want to use the functions in.

// // inputHas($key): returns true or false based on whether the key is available.
// function inputHas($key)
// {
// // check if $_REQUEST[$key] isset
// // checks to see if $REQUEST has a key/value set
// //return true if the $key is set on $_request
// // else return treu if it aint.

// return isset($_REQUEST[$key]);
// }

// // inputGet($key): returns the value specified by the key, or null if the key is not set.
// function inputGet($key)
// {
// // if inputHas($key)
// // return the value specified by the key
// // or return null if they key is not set.
// 	if(inputHas($key)) {
// 		else {
// 			return null;
// 		}
// 	}
// }

// // escape($input): returns the input as a safely escaped string.
// escape($input)
// {
// 	return htmlspecialchars(strip_tags($string));
// }







?>