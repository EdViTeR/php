<?php
require_once 'Input.php';

/**
 * 
 */
class Submit extends Input {

	function __construct() {
		$this->setAttr('type', 'submit');
		parent::__construct();
	}
}

	$form = (new Form)->setAttrs(['action' => 'test.php', 'method' => 'GET']);
	
	echo $form->open();
		echo (new Input)->setAttr('name', 'year');
		echo new Submit;
	echo $form->close();