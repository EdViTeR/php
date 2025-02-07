<?php
require_once 'Tag.php';

/**
 * №1
 */
class Form extends Tag {
	
	function __construct() {
		parent::__construct('form');
	}
}

$form = (new Form)->setAttrs([
	'action' => 'test.php',
	'method' => 'POST'
]);
	
echo $form->open();
echo $form->close();