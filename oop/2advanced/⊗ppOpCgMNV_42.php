<?php


/**
 * 
 */
class Employee {
	
	private $name;
	private $salary;
	private $position;

	function __construct($name, $salary, $position){
		$this->name = $name;
		$this->salary = $salary;
		$this->position = $position;
	}

	public function getName() {
		return $this->name;
	}

	public function getSalary() {
		return $this->salary;
	}

	public function getPosition() {
		return $this->position;
	}
}

$employee = new Employee('qwew', 2222, 'rrr');
$methods = [
	'method1' => 'getName',
	'method2' => 'getSalary',
	'method3' => 'getPosition',
];
echo $employee->{$methods['method1']}();
?>