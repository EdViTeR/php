<?php
require_once 'Tag.php';

/**
 * №1
 */
class Link extends Tag {
	
	// №8
	CONST active = 'active';

	function __construct() {
		parent::__construct('a');
		$this->setAttr('href', '');
	}

	public function open() {
		$this->activateSelf();
		return parent::open();	
	}

	// №6
	private function activateSelf() {
		if ($this->getAttr('href') === substr($_SERVER['REQUEST_URI'], -5)) {
			$this->addClass(self::active);
		}
	}
}