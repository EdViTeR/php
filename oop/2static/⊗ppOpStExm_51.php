<?php
class User {
	private static $count = 0; // счетчик объектов 
	public $name;
	
	public function __construct($name) {
		$this->name = $name;
		
		// Увеличиваем счетчик при создании объекта: 
		self::$count++;
	}

	public static function getCount() {
		return self::$count;
	}
}

$user1 = new User('user1');
echo User::getCount(); // выведет 1

$user2 = new User('user2');
echo User::getCount(); // выведет 2
