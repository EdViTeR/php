<?php

/**
 * №1
 */
class User {
	
	private static $count = 0;
	public $name;

	function __construct($name) {
		$this->name = $name;
	
		self::$count++;
	}

	// №2
	public static function getCount() {
		return self::$count;
	}
}

$user1 = new User('user1');
echo User::getCount();
$user2 = new User('user1');
echo User::getCount();