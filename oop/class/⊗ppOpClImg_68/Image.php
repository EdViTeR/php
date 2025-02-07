<?php
require_once 'Tag.php';

/**
 * №1
 */
class Image extends Tag {
	
	function __construct() {
		$this->setAttr('src', '')->setAttr('alt', '');
		parent::__construct('img');
	}

	function __toString() {
		return parent::open();
	}
}	
//№2 №3 №4
echo (new Image())->setAttrs(['src'=>'img.png', 'width'=>300, 'height'=>200]);