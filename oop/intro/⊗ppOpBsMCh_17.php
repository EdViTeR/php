<?php

/**
 * №1
 */
class Arr {

	private $number;

	function __construct($number) {
		$this->number = $number;
	}

	public function add($number) {
		$this->number[] = $number;
		return $this;
	}

	public function push($number) {
		$this->number = array_merge($this->number, $number);
		return $this;
	}

	public function getSum() {
		return array_sum($this->number);
	}
}

echo (new Arr([1, 2, 3]))->add(4)->push([5, 6, 7])->getSum();

echo '<br></br><a href="intro.php">Назад</a>';
?>