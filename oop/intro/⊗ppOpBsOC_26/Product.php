<?php

/**
 * 
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

// №1
// $product1 = new Product('apple', 30);
// $product2 = new Product('apple', 30);
// function compare($product1, $product2) {
// 	if ($product1 == $product2) {
// 		return true;
// 	} else {
// 		return false;
// 	}
// }

// №2
// $product1 = new Product('apple', 30);
// $product2 = $product1;
// function compare($product1, $product2) {
// 	if ($product1 === $product2) {
// 		return true;
// 	} else {
// 		return false;
// 	}
// }

// №3
$product1 = new Product('apple', 30);
$product2 = $product1;
function compare($product1, $product2) {
	if ($product1 === $product2) {
		return 1;
	} elseif ($product1 == $product2) {
		return 0;
	} else {
		return -1;
	}
}
var_dump(compare($product1, $product2)); die;