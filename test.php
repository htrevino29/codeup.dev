<?php


// echo 'hello from an external file! ' . PHP_EOL;
$five = [1,2,3,4,5];
// var_dump($five);
// print_r($five);
// echo($five[3]);


$person1 = array('first' => 'John', 'last' => 'Doe','email' => 'johndoe@gmail.com', 'phone' => '2101234567');
$person2 = array('first' => 'bob', 'last' => 'man','email' => 'person2@gmail.com', 'phone' => '2101234554');
$person3 = array('first' => 'bill', 'last' => 'guy','email' => 'person3@gmail.com', 'phone' => '2101234512');

$users=[$person1,$person2,$person3];

// var_dump($users[1]['phone']);

echo((-20)+(-22)).PHP_EOL;
echo(16-(42).PHP_EOL);
echo(6*4).PHP_EOL;
echo(3%2).PHP_EOL;
echo('----------').PHP_EOL;

$num = 5;
$num *=2;
echo($num).PHP_EOL;
$item1 =5;
echo($item1).PHP_EOL;
$item2 = $item1;
//echo(&$item2).PHP_EOL;


/////////////////////
// assigning associate array key => value pairs
$person1 = [
	'name' => 'Ryan',
	'age' => 34,
	'languages' => ['css','js','html', 'php', 'mysql'],		
];
$person2 = [
	'name' => 'jose',
	'age' => 36,
	'languages' => ['css','js', 'html', 'php', 'mysql'],
];
 $newArray = [$person1, $person2];

 ////////////////////


 

?>