<?php 
require_once 'Rectangle.php';

class square extends Rectangle
{
	public function perimeter()
	{
	    return ($this->height+$this->width)*2;
	}
}
?>