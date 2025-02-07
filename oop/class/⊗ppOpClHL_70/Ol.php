<?php
require_once 'HtmlList.php';

/**
 * №3
 */
class Ol extends HtmlList {
	
	function __construct() {
		parent::__construct('ol');
	}
}

$ol = new Ol;
echo $ol->setAttr('class', 'eee')
	->addItem((new ListItem())->setText('item1')->setAttr('class', 'first'))
	->addItem((new ListItem())->setText('item2'))
	->addItem((new ListItem())->setText('item3'));