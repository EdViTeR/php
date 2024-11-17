<?php

/**
 * 
 */
class Product {
	private $name;
	private $cost;
	private $quantity;

	function __construct($name, $cost, $quantity) {
		$this->name = $name;
		$this->cost = $cost;
		$this->quantity = $quantity;
	}

	public function getName() {
		return $this->name;
	}

	public function getCost() {
		return $this->cost * $this->quantity;
	}

	public function getQuantity() {
		return $this->quantity;
	}
}

/**
 * 
 */
class Cart {
	public $products;

	public function add($products) {
		$this->products[] = $products;
	}

	public function remove($name) {
		foreach ($this->products as $key => $product) {
			if ($product->getName() === $name) {
				unset($this->products[$key]);
			}
		}
	}

	public function getTotalCost() {
		$totalCost = 0;
		foreach ($this->products as $key => $product) {
			$totalCost += $product->getCost();
		}
		return $totalCost;
	}

	public function getTotalQuantity() {
		$totalCount = 0;
		foreach ($this->products as $key => $product) {
			$totalCount += $product->getQuantity();
		}
		return $totalCount;
	}

	public function getAvgPrice() {
		return $this->getTotalCost() / $this->getTotalQuantity();
	}
}


$cart = new Cart();
$cart->add(new Product('Груша', 1, 50));
$cart->add(new Product('Яблоко', 5, 40));
$cart->add(new Product('Арбуз', 3, 200));
$cart->remove('Яблоко');
echo $cart->getTotalCost() . '<br>';
echo $cart->getTotalQuantity() . '<br>';
echo $cart->getAvgPrice() . '<br>';