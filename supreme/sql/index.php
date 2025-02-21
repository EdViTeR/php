<?php
require_once 'connect.php';

// №1
$res = $pdo->prepare('SELECT name, age FROM users');
$res->execute();
$col = $res->fetchAll(PDO::FETCH_KEY_PAIR);
var_dump($col);
?>