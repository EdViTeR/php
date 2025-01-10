<?php
require_once 'ParentClass.php';

/**
 * №16 Проверяет, содержит ли объект в своем дереве предков указанный класс
 */
class ChildClass extends ParentClass {
	public $child;
}

// №17
$child = new ChildClass;
var_dump(is_subclass_of($child, 'GrandParentClass'));
// №19
var_dump(is_subclass_of($child, 'ParentClass'));