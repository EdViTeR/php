<?php

/**
 * №1
 */
class Product {
	
	private $name;
	private $price;
	private $quantity;

	function __construct($name, $quantity, $price) {
		$this->name = $name;
		$this->quantity = $quantity;
		$this->price = $price;
	}

	public function getName() {
		return $this->name;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getQuantity() {
		return $this->quantity;
	}

	// №2
	public function getCost() {
		return $this->price * $this->quantity;
	}
}