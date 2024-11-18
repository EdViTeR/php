<?php

/**
 * №1
 */
class Arr {

	private $numbers = [];
	
	function __construct($numbers) {
		$this->numbers = $numbers;
	}

	public function add($numbers) {
		$this->numbers[] = $numbers;
	}

	public function getSum(){
		return array_sum($this->numbers);
	}
}
echo (new Arr([1, 2, 3]))->getsum() + (new Arr([4, 5, 6]))->getsum();

echo '<br></br><a href="intro.php">Назад</a>';
?>