<?php
require_once 'Employee.php';

/**
 * №4
 */
class Driver extends Employee {

	private $experience;
	private $category;

	public function getExperience() {
		return $this->experience;
	}

	public function setExperience($experience) {
		$this->experience = $experience;
	}

	public function getCategory() {
		return $this->category;
	}

	public function setCategory($category) {
		$this->category = $category;
	}
}

$driver = new Driver;

$driver->setName('gru');
$driver->setAge(26);
$driver->setSalary(2000);
$driver->setCategory('A');
echo $driver->getName();
echo $driver->getSalary();
echo $driver->getCategory();
?>