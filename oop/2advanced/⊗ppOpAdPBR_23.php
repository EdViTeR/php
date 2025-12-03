<?php
/**
 * 
 */
class Product {

	public $name;
	public $price;

    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

$product1 = new Product('qwe', 2000);
$product2 = $product1;
$product2->name = 'qqq';

var_dump($product1); die;