<?php
require_once 'Employee.php';
require_once 'iProgrammer.php';
/**
 * 
 */
class Programmer extends Employee implements iProgrammer {
	
	private $langs = [];

	public function addLang($lang) {
		$this->langs[] = $lang;
	}

	public function getLangs() {
		return $this->langs;
	}
}

$programmer = new Programmer('eric', 1000);
$programmer->addLang('PHP');
$programmer->addLang('JS');
var_dump($programmer->getLangs()); die;