<?php

/**
 * №1
 */
class Tag {
	
	private $name;
	private $attrs = [];

	function __construct($name, $attrs) {
		$this->name 	= $name;
		$this->attrs 	= $attrs;
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
			foreach ($attrs as $key => $value) {
				$result .= " $key=\"$value\"";
			}
			return $result;
		} else {
			return '';
		}
	}
}

$tag = new Tag('input', ['id' => 'test', 'class' => 'eee bbb', 'placeholder' => 'Рабочий инпут']);
echo $tag->open(); 