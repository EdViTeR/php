<?php

/**
 * №1
 */
class Product
{
	public $name;
	public $price;

	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price  = $price;
	}
}
// №2
$product1 = new Product('apple', 30);
// №3
$product2 = $product1;
var_dump($product2); die;