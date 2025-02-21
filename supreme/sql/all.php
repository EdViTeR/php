<?php

require_once 'connect.php';
// ⊗ppSpPDQu_69
$res = $pdo->query('SELECT * FROM users');
while ($row = $res->fetch()) {
	echo '<p>' . $row['name'] . ' ' . $row['salary'] . '</p>';
}

/////////////////////////////////////////////////////////////////
// ⊗ppSpPDNP_73 №1
$age = 21;
$sql = 'SELECT * FROM users WHERE age=:age'; 
$res = $pdo->prepare($sql);

$res->execute([
	'age' => $age,
]);

// №2
$age1 = 20;
$age2 = 30;
$sql = 'SELECT * FROM users WHERE age>:age1 and age<:age2'; 
$res = $pdo->prepare($sql);
$res->execute([
	'age1' => $age1,
	'age2' => $age2,
]);

// №3
$age1 = 20;
$age2 = 30;
$salary1 = 500;
$salary2 = 800;

$sql = 'SELECT * FROM users WHERE age>:age1 and age<:age2 AND salary>:salary1 and salary<:salary2';

$res = $pdo->prepare($sql);
$res->execute([
	'age1' 		=> $age1,
	'age2' 		=> $age2,
	'salary1' 	=> $salary1,
	'salary2' 	=> $salary2,
]);
while ($row = $res->fetch()) {
	var_dump($row);
}
/////////////////////////////////////////////////////////////////
// ⊗ppSpPDVB_75 №1
$name1 = 'name1';
$name2 = 'name2';

$sql = 'SELECT * FROM users WHERE name=? or name=?'; 
$res = $pdo->prepare($sql);

$res->bindValue(1, $name1, PDO::PARAM_INT);
$res->bindValue(2, $name2,  PDO::PARAM_STR);
$res->execute();

while ($row = $res->fetch()) {
	var_dump($row);
}
// №2
$name1 = 'name1';
$name2 = 'name2';

$sql = 'SELECT * FROM users WHERE name=? or name=?'; 
$res = $pdo->prepare($sql);

$res->bindValue(1, $name1, PDO::PARAM_STR);
$res->bindValue(2, $name2,  PDO::PARAM_STR);
$res->execute();

while ($row = $res->fetch()) {
	var_dump($row);
}
/////////////////////////////////////////////////////////////////
// №2
$age1 = 21;
$age2 = 22;

$sql = 'SELECT * FROM users WHERE age=? or age=?'; 
$res = $pdo->prepare($sql);

$res->bindValue(1, $age1, PDO::PARAM_INT);
$res->bindValue(2, $age2,  PDO::PARAM_INT);
$res->execute();

while ($row = $res->fetch()) {
	var_dump($row);
}
/////////////////////////////////////////////////////////////////
// ⊗ppSpPDOFG_77 №1
$res = $pdo->prepare('SELECT age FROM users');
$res->execute();

while ($col = $res->fetchColumn()) {
	var_dump($col);
}
/////////////////////////////////////////////////////////////////
// ⊗ppSpPDADG_78 №1
$res = $pdo->prepare('SELECT * FROM users');
$res->execute();
$col = $res->fetchAll();
var_dump($col);
// №2
$res = $pdo->prepare('SELECT * FROM users');
$res->execute();
$col = $res->fetch();
var_dump($col);
// №3
$res = $pdo->prepare('SELECT name, age FROM users');
$res->execute();
$col = $res->fetchAll(PDO::FETCH_KEY_PAIR);
var_dump($col);