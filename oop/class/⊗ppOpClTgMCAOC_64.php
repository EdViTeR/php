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
		$result = '';
		if (!empty($attrs)) {
			foreach ($attrs as $name => $value) {
				if ($value === true) {
					$result .= " $name";
				} else {
					$result .= " $name=\"$value\"";
				}
			}
			return $result;
		} else {
			return '';
		}
	}

	public function setAttr($name, $value) {
		$this->attrs[$name] = $value;
		return $this;
	}

	// №1
	public function setAttrs($attrs) {
		foreach ($attrs as $name => $value) {
			$this->attrs[$name] = $value;
		}
		return $this;
	}
}

echo (new Tag('input'))
	->setAttr('name1', 'name')
	->open();

echo (new Tag('input'))
	->setAttr('name1', 'name')
	->open();