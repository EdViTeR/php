<?php

namespace Modules\Shop;

class UserCart extends Cart {
	public $b = 2;

	public function getB() {
		return $this->b;
	}
}