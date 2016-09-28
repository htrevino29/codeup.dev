<?php 
require_once 'Rectangle.php';

class square extends Rectangle
{
	
	public function __construct($side)
	{
		parent::__construct($side,$side);
			
	}
	public function perimeter()
	{
		echo "SQ perimeter".PHP_EOL;
		return ($this->getHeight()+$this->getWidth())*2;
	}
	public function area()
	{
		echo "SQ area".PHP_EOL;
		return ($this->getHeight()*$this->getWidth());
	}

}




?>