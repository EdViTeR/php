<?php
	$host = 'localhost';
	$db = 'php_sql';
	$user = 'root';
	$pass = 'root';
	$charset = 'utf8';
	
	$dsn = "mysql:host=$host; dbname=$db; charset=$charset";
	
	$opt = [
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES => false,
	];
	
	try {
		$pdo = new PDO($dsn, $user, $pass, $opt);
		echo 'DB is connected';
	} catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
?>