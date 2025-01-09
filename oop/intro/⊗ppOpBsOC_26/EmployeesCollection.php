<?php
require_once 'Employee.php';

class EmployeesCollection {

	private $employees = []; // массив работников
	
	// public function add($newEmployee) {
	// 	if (!$this->exist($newEmployee)) {
	// 		$this->employees[] = $newEmployee;
	// 	}
	// }
	
	// public function get() {
	// 	return $this->employees;
	// }

	// private function exist($newEmployee) {
	// 	foreach ($this->employees as $employee) {
	// 		if ($employee == $newEmployee) {
	// 			return true;
	// 		}
	// 	}
	// 	return false;
	// }
	
	public function add($newEmployee) {
		if (!in_array($newEmployee, $this->employees, true)) {
			$this->employees[] = $newEmployee;
		}
	}
	
	public function get() {
		return $this->employees;
	}
}
$employeesCollection = new EmployeesCollection;
$employeesCollection->add(new Employee('john', 100));
$employeesCollection->add(new Employee('john', 100));
var_dump($employeesCollection->get());
?>