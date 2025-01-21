<?php

/**
 * №1
 */
class Tag {
	
	private $name;

	function __construct($name) {
		$this->name = $name;
	}

	public function open() {
		return $name = "<$this->name>";
	}

	public function close() {
		return "</$this->name>";
	}
}

// №3
$tag = new Tag('header');
echo $tag->open() . 'header сайта' . $tag->close();
$tag = new Tag('div');
echo $tag->open() . "text" . $tag->close();
$tag = new Tag('input');
echo $tag->open();
// №2
$tag = new Tag('img');
echo $tag->open() . $tag->close();