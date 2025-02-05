<?php

/**
 * 
 */
class Tag {
	
	private $name;
	private $attrs = [];

	function __construct($name) {
		$this->name = $name;
	}

	public function open() {
		$name = $this->name . $this->getAttrsStr($this->attrs);
		return "<$name>";
	}

	public function close() {
		return "</$this->name>";
	}

	public function getAttrsStr($attrs) {
		if (!empty($attrs)) {
			$result = '';
			foreach ($attrs as $name => $value) {
				$result .= " $name=\"$value\"";
			}
			return $result;
		} else {
			return '';
		}
	}

	// №1
	public function setAttr($name, $value) {
		$this->attrs[$name] = $value;
		return $this;
	}

	// №2
	public function removeAttr($name) {
		unset($this->attrs[$name]);
		return $this;
	}
}

$tag = new Tag('div');
echo $tag->setAttr('id', 'test')->setAttr('class', 'eee vvv')->removeAttr('class')->open();
echo $tag->close(); 