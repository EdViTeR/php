<?php

/**
 * №1
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

	public function setAttrs($attrs) {
		foreach ($attrs as $name => $value) {
			$this->attrs[$name] = $value;
		}
		return $this;
	}

	public function addClass($className) {
		if (isset($this->attrs['class'])) {
			$classNames = explode(' ', $this->attrs['class']);

			if (!in_array($className, $classNames)) {
				$classNames[] = $className;
				$this->attrs['class'] = implode(' ', $classNames);
			}
		} else {
			$this->attrs['class'] = $className;
		}
		return $this;
	}
}

$tag = new Tag('input');
echo (new Tag('input'))->addClass('eee')->addClass('bbb')->open();