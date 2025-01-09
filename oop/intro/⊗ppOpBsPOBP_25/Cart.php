<?php
require_once 'Product.php';

/**
 * №3
 */
class Cart {
	
	private $products = [];

	// №4
	public function add($products) {
		$this->products[] = $products;
	}

    public function remove($name) {
        foreach($this->products as $key => $value) {
        	if ($value->getName() === $name) {
        		unset($this->products[$key]);
        	}
        }
    }

	// №6
	public function getTotalCost() {
		$totalCost = 0;
		foreach ($this->products as $product) {
			$totalCost += $product->getCost();
		}
		return $totalCost;
	}

	// №7
	public function getTotalQuantity() {
		$totalQuantity = 0;
		foreach ($this->products as $product) {
			$totalQuantity += $product->getQuantity();
		}
		return $totalQuantity;
	}

	// №8
	public function getAvgPrice() {
		return $this->getTotalCost() / $this->getTotalQuantity();
	}
}

$products = new Cart;
$products->add(new Product('apple', 10, 100));
$products->add(new Product('banana', 20, 200));
$products->add(new Product('potato', 30, 300));
// echo $products->getTotalQuantity(); // выведет 600
echo $products->getAvgPrice(); // выведет 600
$products->remove('apple'); // выведет 600
var_dump($products); die;
