<?php

/**
 * №1
 */
class ArraySumHelper {

	public function getAvg1($arr) {
		return $this->getSum($arr, 1);
	}
	
	public function getAvg2($arr) {
		return sqrt($this->calcSqrt($this->getSum($arr, 2), 2));
	}
	
	public function getAvg3($arr) {
		return sqrt($this->calcSqrt($this->getSum($arr, 3), 3));
	}
	
	public function getAvg4($arr) {
		return sqrt($this->calcSqrt($this->getSum($arr, 4), 4));
	}

	private function getSum($arr, $power) {
		$sum = 0;
		foreach ($arr as $key => $value) {
			$sum += pow($value, $power);
		}
		return $sum;
	}
	
	private function calcSqrt($num, $power) {
		$sum = 0;
		return $sum = pow($num, 1/$power);
	}
}

$arr = [1, 2, 3];
echo (new ArraySumHelper())->getAvg1($arr) . '</br>';
echo (new ArraySumHelper())->getAvg2($arr) . '</br>';
echo (new ArraySumHelper())->getAvg3($arr) . '</br>';
echo (new ArraySumHelper())->getAvg4($arr);

echo '<br></br><a href="intro.php">Назад</a>';
?>