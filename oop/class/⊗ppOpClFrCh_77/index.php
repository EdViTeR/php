<?php
require_once 'Form.php';
require_once 'Input.php';
require_once 'Submit.php';
require_once 'Textarea.php';
require_once 'Checkbox.php';
require_once 'Radio.php';

$form = (new Form)->setAttrs([
	'action' => '',
	'method' => 'GET'
]);

// echo $form->open();
// 	echo (new Checkbox)->setAttr('name', 'checkbox');
// 	echo (new Input)->setAttr('name', 'user');
// 	echo new Submit;
// echo $form->close();


echo $form->open();
	echo (new Radio)->setAttr('name', 'radio');
	echo (new Radio)->setAttr('name', 'radio');
	echo (new Input)->setAttr('name', 'user');
	echo new Submit;
echo $form->close();
?>