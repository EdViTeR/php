<?php
require_once 'ParentClass.php';

/**
 * №15 Возвращает имя родительского класса для объекта или класса
 */
class ChildClass extends ParentClass {
	public $child;
}

$child = new ChildClass;
var_dump(get_parent_class($child));