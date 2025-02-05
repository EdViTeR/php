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

$input = new Tag('input');
echo $input->open();
$div = new Tag('div');
echo $div->open() . "text" . $div->close();
// №2
$img = new Tag('img');
echo $img->open() . $img->close();
// №3
$header = new Tag('header');
echo $header->open() . 'header сайта' . $header->close();