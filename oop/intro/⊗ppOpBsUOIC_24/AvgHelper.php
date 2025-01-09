<?php

/**
 * 
 */
class AvgHelper {
	
	//№2
	public function getAvg($num) {
		return $avg = array_sum($num) / count($num);
	}
	
	//№3
	public function getMeanSquare($num) {
		$value = sqrt(array_reduce($num, function($prev, $item){
		    return $prev + pow($item, 2);
		}, 0) / count($num));
	}

}