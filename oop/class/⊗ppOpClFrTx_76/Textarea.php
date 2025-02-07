<?php
require_once 'Tag.php';
require_once 'Form.php';

/**
 * №1
 */
class Textarea extends Tag {
	
	function __construct() {
		parent::__construct('textarea');
	}

	// №2
	public function open() {
		$textareaName = $this->getAttr('name');
		if ($textareaName) {
			if (isset($_REQUEST[$textareaName])) {
				$value = $_REQUEST[$textareaName];
				$this->setText($value);
			}
		}
		return parent::open();
	}

	public function __toString() {
		return $this::open();
	}
}