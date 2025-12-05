<?php
	class User {
		protected $name;
		
		public function setName($name) {
			$this->name = $name;
		}
		public function getName() {
			return $this->name;
		}
	}
	
	class Employee extends User {
		public function setName($name) {
			if (strlen($name) > 0) {
				$this->name = $name;
			}
		}
	}

$employee = new Employee();
$employee->setName('qwe');
echo $employee->getName();