<?php

/**
 * 
 */
class ArrSum {
	
	public $arr = [];

	function __construct($arr) {
		$this->arr = $arr;
	}

	public function add($arr) {
		$this->arr[] = $arr;
		return $this;
	}

	public function getSum() {
		return array_sum($this->arr);
	}
}

$arr = [2,4];

$sum = new ArrSum($arr);
var_dump($sum->add(5)); die;
echo $sum->getSum() . "<p>";
$sum->add(4);
echo $sum->getSum();
echo (new ArrSum([1,2,3]))->add(4)->getSum();
/////////////////////////////////////////////////////////////////
class StringProcessor{

	private $str = '';
	
	public function __construct($text)
	{
		$this->str = $text;
	}
	
	public function append($text)
	{
		$this->str .= $text;
		return $this;
	}
	
	public function getValue()
	{
		return $this->str;
	}
	
	public function getLength()
	{
		return strlen($this->str);
	}
}
// echo (new StringProcessor('aaa'))->append('bbb')->append('ccc')->getLength();
?>