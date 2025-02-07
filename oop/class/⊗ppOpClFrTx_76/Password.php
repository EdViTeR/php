<?php
require_once 'Input.php';

/**
 * №1
 */
class Password extends Input {
	
	function __construct() {
		$this->setAttr('type', 'password');
		parent::__construct();
	}
}