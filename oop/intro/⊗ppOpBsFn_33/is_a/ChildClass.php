<?php
require_once 'ParentClass.php';

/**
 * №20 Проверяет, принадлежит ли объект к данному классу или содержит данный класс в числе своих предков
 */
class ChildClass extends ParentClass {
	public $child;
}

$obj = new ChildClass;
// №21
var_dump(is_a($obj, 'ChildClass'));
var_dump(is_a($obj, 'ParentClass'));