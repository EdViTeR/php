<?php
require_once 'Form.php';
require_once 'Input.php';
require_once 'Submit.php';
require_once 'Password.php';
require_once 'Hidden.php';

echo new Hidden;
echo (new Hidden)->setAttr('name', 'id');

$form = (new Form)->setAttrs([
	'action' => 'test.php',
	'method' => 'GET'
]);

echo $form->open();
	echo (new Hidden)->setAttr('name', 'id')->setAttr('value', '123');
	echo (new Input)->setAttr('name', 'year');
	echo new Submit;
echo $form->close();
?>