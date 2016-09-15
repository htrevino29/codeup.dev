<?php 

// * mcv concept
// * php with html 
// * using short tags and alternative syntax 
// * view / controller separation 
// * GET with PHP 
// * POST with PHP
// * handling user input 
// * sessions with php 
// * include and require once 
// * templating 
// * classes and objects 
// * using $this 
// * the public keyword 
// * constructors and destructors 
// * static methods and properties 
// * the self keyword 
// * using static methods / properties outside the class 
// * anything that wasnt clear enough in this module.



// QUESTIONS
// Self keyword how to use it, where..
	//when you know that youre using static methods or variables in class. 
	class Animal{
		public static $name = "a";
		public $color;
		public function __construct(){
			echo "The class animal was created";
		}
		public static function getName(){
			echo self::name / " is the name of my animal";
		}

		public function getColor(){
			return $this->color;
		}
		
		public function __destruct();{
			
		}
	}
	//require
		// static methods and properties
	echo Animal::getName()

	// non static methods and properties

	animalObj = new Animal();
	$animalObj->color = 'brown';
	$animalObj->__construct();
	$animalObj->getColor();

// Constructors and dest
// Public keyword on classes
// Class creating instances of 
// $this?
	//only used inside a class
// Lifecycle of the code nested
// query strings on get request
// how to tell if the site is xss
// how cookies tie sessions
// how to handle requests on the back end
// how to get the log file from the remote server
// playing with static methods
// self vs $this practical usages
// all of it classes and objects
// using get in the back end
 ?>