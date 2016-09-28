<?php 
require_once'square.php';

$rectangle = new Rectangle(2,3);
$square = new Square(2);

echo $rectangle->perimeter().PHP_EOL;
echo $rectangle->area().PHP_EOL;
// echo $square->perimeter().PHP_EOL;
echo "-----------------------".PHP_EOL;
echo $square->perimeter().PHP_EOL;
echo $square->area().PHP_EOL;




?>	