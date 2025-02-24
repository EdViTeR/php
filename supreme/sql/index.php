<?php
require_once 'connect.php';

// №1
$start = 3;
$count = 2;

$res = $pdo->prepare('SELECT * FROM users LIMIT ?, ?');
$res->bindValue(1, $start, PDO::PARAM_INT);
$res->bindValue(2, $count, PDO::PARAM_INT);

$res->execute();
$row = $res->fetchAll();
var_dump($row);
?>