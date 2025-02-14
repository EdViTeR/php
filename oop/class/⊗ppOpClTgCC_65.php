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
			$this->setAttr($name, $value);
		}

		return $this;
	}

	public function removeAttr($name) {
		unset($this->attrs[$name]);

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

	private function removeElem($elem, $arr) {
		$key = array_search($elem, $arr);
		array_splice($arr, $key, 1);

		return $arr;
	}

	public function removeClass($className) {
		if (isset($this->attrs['class'])) {
			$classNames = explode(' ', $this->attrs['class']);

			if (in_array($className, $classNames)) {
				$classNames = $this->removeElem($className, $classNames);
				$this->attrs['class'] = implode(' ', $classNames);
			}
		}

		return $this;
	}

}
echo (new Tag('input'))->addClass('eee')->open();
echo (new Tag('input'))->addClass('eee')->addClass('bbb')->open();
echo (new Tag('input'))
	->setAttr('class', 'eee bbb')
	->addClass('kkk')->open();
echo (new Tag('input'))
	->setAttr('class', 'eee bbb')
	->addClass('eee')
	->open();
echo (new Tag('input'))
	->addClass('eee')
	->addClass('bbb')
	->addClass('eee')
	->open();
echo (new Tag('input'))
->setAttr('class', 'eee zzz kkk') // добавим 3 класса
->removeClass('zzz') // удалим класс 'zzz'
->open();