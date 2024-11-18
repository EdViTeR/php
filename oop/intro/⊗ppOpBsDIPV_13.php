<?php
/**
 * №1
 */
class Arr {
	
	private $numbers = [];

	public function add($num = []) {
		$this->numbers = array_merge($this->numbers, $num);
	}

	#№2
	public function getAvg() {
		return array_sum($this->numbers) / count($this->numbers);
	}
}

$arr = new Arr;
$arr->add([1,2,3]);
$arr->add([4,5,6]);
$arr->add([7,8,9]);
echo $arr->getAvg();

echo '<br></br><a href="intro.php">Назад</a>';
?>