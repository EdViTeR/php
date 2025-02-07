<?php
require_once 'Tag.php';
require_once 'Form.php';

/**
 * 
 */
class Input extends Tag {
	
	function __construct() {
		parent::__construct('input');
	}

	public function open() {
		$inputName = $this->getAttr('name');
		if ($inputName) {
			if (isset($_REQUEST[$inputName])) {
				$value = $_REQUEST[$inputName];
				$this->setAttr('value', $value);
			}
		}
		return parent::open();
	}

	public function __toString() {
		return $this::open();
	}
}

$form = (new Form)->setAttrs(['action' => '', 'method' => 'GET']);

echo $form->open();
	echo (new Input)->setAttr('name', 'num1');
	echo (new Input)->setAttr('name', 'num2');
	echo (new Input)->setAttr('name', 'num3');
	echo (new Input)->setAttr('name', 'num4');
	echo (new Input)->setAttr('name', 'num5');
	echo (new Input)->setAttr('type', 'submit');
echo $form->close();