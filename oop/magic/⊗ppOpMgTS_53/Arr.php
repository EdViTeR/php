<?php

/**
 *  №2
 */
class Arr {

	private $numbers = [];

	public function add($numbers) {
		$this->numbers[] = $numbers;
		return $this;
	}

	function __toString() {
		return (string) array_sum($this->numbers);
	}
}

$arr = new Arr;
echo $arr->add(1)->add(2)->add(3);