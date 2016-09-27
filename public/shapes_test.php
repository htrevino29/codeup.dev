<?php 
require_once'square.php';

$rectangle = new Rectangle(2,3);
echo $rectangle->area().PHP_EOL;
$square = new Square(2,3);
echo $square->perimeter().PHP_EOL;
echo $square->area().PHP_EOL;

?>