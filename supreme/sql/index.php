<?php
require_once 'connect.php';

// №1
$ages = [
	1 => 20,
	3 => 30,
	5 => 40,
];

$res = $pdo->prepare('UPDATE users SET age=? WHERE id=?');
foreach ($ages as $id => $salary) {
	$res->execute([$salary, $id]);
}
?>