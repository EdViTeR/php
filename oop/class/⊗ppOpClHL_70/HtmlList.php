<?php
require_once 'Tag.php';
require_once 'ListItem.php';

/**
 * №1
 */
class HtmlList extends Tag {

	private $items = [];

	public function addItem(ListItem $li) {
		$this->items[] = $li;
		return $this;
	}


	// №2
	public function getItem() {
		$result = '';
		foreach ($this->items as $item) {
			$result .= $item;
		}
		return $result;
	}

	public function __toString() {
		return $this->open() . $this->getItem() . $this->close();
	}
}

// $list = new HtmlList('ul');

// echo $list->setAttr('class', 'eee')
// 	->addItem((new ListItem())->setText('item1')->setAttr('class', 'first'))
// 	->addItem((new ListItem())->setText('item2'))
// 	->addItem((new ListItem())->setText('item3'));