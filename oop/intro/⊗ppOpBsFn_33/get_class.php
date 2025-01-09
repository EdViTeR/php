<?php

/**
 * №1 Отображает имя класса
 */
class GetClassName {

	public $name;

	function __construct($name) {
		$this->name = $name;
	}
}

$circle = new GetClassName('qwerty');
echo get_class($circle);