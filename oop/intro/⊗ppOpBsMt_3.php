<?php

/**
 * №1
 */
// class User {
// 	public $name;
// 	public $age;

// 	public function show() {
// 		return '!!!';
// 	}
// }
// $user = new User();
// $user->name = 'john';
// $user->age = 25;
// echo $user->show();

#№2
class User {
	public $name;
	public $age;

	public function show($str) {
		return $str . '!!!';
	}
}
$user = new User();
$user->name = 'eric';
$user->age = 25;
echo $user->show('hello');

echo '<br></br><a href="intro.php">Назад</a>';
?>