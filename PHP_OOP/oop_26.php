<?php
	class Employee {
		private $name;
		private $salary;
		
		public function __construct($name, $salary)
		{
			$this->name = $name;
			$this->salary = $salary;
		}
		
		public function getName()
		{
			return $this->name;
		}
		
		public function getSalary()
		{
			return $this->salary;
		}
	}

	class EmployeesCollection {
		private $employeers = [];

		function add($newEmployeer) {
			if (!in_array($newEmployeer, $this->employeers)) {
				$this->employeers[] = $newEmployeer;
			}
		}

		public function getEmployeers() {
			return $this->employeers;
		}
	}

	$employeesCollection = new EmployeesCollection;
	
	$employeesCollection->add(new Employee('john', 100));
	$employeesCollection->add(new Employee('john', 100));
	var_dump($employeesCollection);

?>