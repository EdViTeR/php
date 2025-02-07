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