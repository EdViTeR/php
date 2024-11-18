<?php
require_once 'Employee.php';

/**
 * №3
 */
class Programmer extends Employee {

	private $langs = [];

	public function getLangs() {
		return $this->langs;
	}

	public function setLangs($langs) {
		$this->langs = $langs;
	}
}

$programmer = new Programmer;

$programmer->setLangs(['php', 'js']);
$programmer->setName('mark');
$programmer->setAge(32);
print_r($programmer->getLangs());
echo $programmer->getName();
echo $programmer->getAge();
?>