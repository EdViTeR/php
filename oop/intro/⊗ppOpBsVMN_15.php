<?php

//№1
class User
{
	private $name;
	private $age;
	
	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getAge()
	{
		return $this->age;
	}
}
$user = new User('john', 21);

$methods = ['method1' => 'getName', 'method2' => 'getAge'];
echo $user->{$methods['method1']}();
echo $user->{$methods['method2']}();

echo '<br></br><a href="intro.php">Назад</a>';
?>