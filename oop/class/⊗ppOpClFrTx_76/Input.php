<?php
require_once 'Tag.php';
require_once 'Form.php';

/**
 * 
 */
class Input extends Tag {
	
	function __construct() {
		parent::__construct('input');
	}

	public function open() {
		$inputName = $this->getAttr('name');
		if ($inputName) {
			if (isset($_REQUEST[$inputName])) {
				$value = $_REQUEST[$inputName];
				$this->setAttr('value', $value);
			}
		}
		return parent::open();
	}

	public function __toString() {
		return $this::open();
	}
}