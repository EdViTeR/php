<?php

class User {

	private $name;
	private $surn;

	function __construct($name, $surn) {
		$this->name = $name;
		$this->surn = $surn;
	}

	public function __toString() {
		return $this->name;
	}

	public function getName() {
		return $this->name;
	}

	public function getSurn() {
		return $this->surn;
	}
}

$user = new User('john', 25);
echo $user;