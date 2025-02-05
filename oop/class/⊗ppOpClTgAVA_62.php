<?php

/**
 * 
 */
class Tag {
		
	private $name;
	private $attrs = [];

	function __construct($name)	{
		$this->name = $name;
	}

	public function open() {
		$name = $this->name;
		$attrsStr = $this->getAttrsStr($this->attrs);
		return "<$name$attrsStr>";
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

	public function setAttr($name, $value) {
		$this->attrs[$name] = $value;
		return $this;
	}
	
	// №1
	public function setAttrs($attrs) {
		foreach ($attrs as $name => $value) {
			$this->setAttr($name, $value);
		}
		return $this;
	}

	public function removeAttr($name) {
		unset($this->attrs[$name]);
		return $this;
	}
}

$tag = new Tag('input');

echo $tag
	->setAttrs(['id' => 'test', 'class' => 'eee'])
	->setAttr('type', 'text')
	->removeAttr('type')
	->open();