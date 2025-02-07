<?php
require_once 'HtmlList.php';

/**
 * №3
 */
class Ul extends HtmlList {
	
	function __construct() {
		parent::__construct('ul');
	}
}

$ul = new Ul;
echo $ul->setAttr('class', 'eee')
	->addItem((new ListItem())->setText('item1')->setAttr('class', 'first'))
	->addItem((new ListItem())->setText('item2'))
	->addItem((new ListItem())->setText('item3'));