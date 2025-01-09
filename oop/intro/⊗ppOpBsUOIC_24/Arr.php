<?php
require_once 'SumHelper.php';
require_once 'AvgHelper.php';
/**
 * №1
 */
class Arr {
	
	private $num = [];
	private $sumHelper;
	private $avgHelper;

	function __construct() {
		$this->sumHelper = new SumHelper;
		$this->avgHelper = new AvgHelper;
	}

	public function getSum23() {
		$num = $this->num;
		return $this->sumHelper->getSum2($num) + $this->sumHelper->
			getSum3($num); 
	}

	public function add($num) {
		$this->num[] = $num;
	}
	
	//№4
	public function getAvgMeanSum() {
		$num = $this->num;
		return $this->avgHelper->getAvg($num) + $this->avgHelper->getMeanSquare($num);
	}
}

$arr = new Arr();
$arr->add(1);
$arr->add(2);
$arr->add(3);
echo $arr->getSum23();
echo $arr->getAvgMeanSum();