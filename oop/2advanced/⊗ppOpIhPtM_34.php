<?php
	class User {
		public function setName($name) {
			if ($this->notEmpty($name)) {
				$this->name = $name;
			}
		}
		public function getName() {
			return $this->name;
		}
		
		protected function notEmpty($str) {
			return strlen($str) > 0;
		}
	}
	class Employee extends User {
		public function setSurn($surn) {
			if ($this->notEmpty($surn)) {
				$this->surn = $surn;
			}
		}
		public function getSurn() {
			return $this->surn;
		}
	}

$employee = new Employee();
$employee->setName('qwe');
$employee->setSurn('www');
echo $employee->getName();
echo $employee->getSurn();