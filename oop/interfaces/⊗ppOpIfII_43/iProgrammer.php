<?php

interface iProgrammer {
	function __construct($name, $salary);
	public function getName();
	public function getSalary();
	public function getLangs();
	public function addLang($lang);
}