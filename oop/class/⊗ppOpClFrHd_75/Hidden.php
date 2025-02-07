<?php
require_once 'Input.php';

/**
 * 
 */
class Hidden extends Input {
	
	function __construct() {
		$this->setAttr('type', 'hidden');
		parent::__construct();
	}
}