<?php
require_once 'Form.php';
require_once 'Input.php';
require_once 'Submit.php';
require_once 'Password.php';

echo new Password;
echo (new Password)->setAttr('name', 'passw');

$form = (new Form)->setAttrs([
	'action' => 'test.php',
	'method' => 'GET'
]);

echo $form->open();
	echo (new Input)   ->setAttr('name', 'login');
	echo (new Password)->setAttr('name', 'passw');
	echo new Submit;
echo $form->close();
?>