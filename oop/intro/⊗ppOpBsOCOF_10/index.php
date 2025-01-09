<?php
require_once 'User.php';
require_once 'Employee.php';
require_once 'Student.php';

$user = new User;
$employee = new Employee;
$student = new Student('eric');
echo $student->name;

echo '<br></br><a href="../index.php">Назад</a>';
?>