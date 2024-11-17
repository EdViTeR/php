<?php
	class Employee {
		private $name;
		private $salary;
		
		public function __construct($name, $salary) {
			$this->name = $name;
			$this->salary = $salary;
		}
		
		public function getName() {
			return $this->name;
		}
		
		public function getSalary() {
			return $this->salary;
		}
	}


	class Student {
		private $name;
		private $scholarship;
		
		public function __construct($name, $scholarship) {
			$this->name = $name;
			$this->scholarship = $scholarship;
		}
		
		public function getName() {
			return $this->name;
		}
		
		public function getScholarship() {
			return $this->scholarship;
		}
	}

	class UsersCollection {
		private $employeers = []; // массив работников
		private $students = []; // массив студентов

		public function add($user) {
			if ($user instanceof Employee) {
				$this->employeers[] = $user;
			} 
			if ($user instanceof Student) {
				$this->students[] = $user;
			}
		}

		public function getTotalSalary() {
			$sum = 0;

			foreach ($this->employeers as $key => $value) {
				$sum += $value->getSalary();
			}
			return $sum;
		}

		public function getTotalScholarship() {
			$sum = 0;

			foreach ($this->students as $key => $value) {
				$sum += $value->getScholarship();
			}
			return $sum;
		}

		public function getTotalPayment() {
			return $this->getTotalSalary() + $this->getTotalScholarship();
		}
	}

	$usersCollection = new UsersCollection;
	
	$usersCollection->add(new Student('kyle', 100));
	$usersCollection->add(new Student('luis', 200));
	
	$usersCollection->add(new Employee('john', 300));
	$usersCollection->add(new Employee('eric', 400));
	echo $usersCollection->getTotalScholarship();
	
	echo $usersCollection->getTotalSalary();
	
	echo $usersCollection->getTotalPayment();


/*
_____________________________________________________________
class User {
	public $name;	
	public $surname;	
	function __construct($name, $surname) {
		$this->name = $name;
		$this->surname = $surname;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		return $this->name = $name;
	}
}

class Employee extends User {
	public $salary;
	function __construct($salary) {
		$this->salary = $salary;
	}
	
}

class City {
	public $name;	
	public $population;	
	function __construct($name, $population) {
		$this->name = $name;
		$this->population = $population;
	}
}
	$arr = [
		$empl1 = new Employee('qq', 200),
		$stud1 = new User('aa', 500),
		$empl2 = new Employee('ww', 300),
		$city2 = new City('das', 300),
		$city1 = new City('fds', 300),
		$stud2 = new User('as', 600),
		$empl3 = new Employee('ee', 400),
		$stud3 = new User('dd', 700),
		$city3 = new City('hhh', 4200),
	];

	foreach ($arr as $key => $value) {
		if (!($value instanceof City || $value instanceof Employee)) {
			var_dump($value->getName());
		}
	}

	//_____________________________________________________________
	class Employee {
		public $name;
		public $salary;

		function __construct($name, $salary) {
			$this->name = $name;
			$this->salary = $salary;
		}

		public function getSalary() {
			return $this->salary;
		}
	}
	
	class Student {
		public $name;
		public $scholarship;

		function __construct($name, $scholarship) {
			$this->name = $name;
			$this->scholarship = $scholarship;
		}

		public function getScholarship() {
			return $this->scholarship;
		}
	}
	$totalSalary = 0;
	$totalScholarship = 0;
	$arr = [
		$empl1 = new Employee('qq', 200),
		$stud1 = new Student('aa', 500),
		$empl2 = new Employee('ww', 300),
		$stud2 = new Student('ss', 600),
		$empl3 = new Employee('ee', 400),
		$stud3 = new Student('dd', 700),
	];

	foreach ($arr as $key => $value) {
		if ($value instanceof Employee) {
			$totalSalary += $value->getSalary();
			echo "Сотрудник $value->name<p>";
		} else {
			$totalScholarship += $value->getScholarship();
			echo "Студент $value->name<p>";
		}
	}
	echo "ЗП1 = $totalSalary";
	echo "ЗП2 = $totalScholarship";
	//_____________________________________________________________
*/
?>