<?php
require_once 'GrandParentClass.php';

/**
 * №16 Проверяет, содержит ли объект в своем дереве предков указанный класс
 */
class ParentClass extends GrandParentClass {
	public $parent;
}


// №18
$parent = new ParentClass;
var_dump(is_subclass_of($parent, 'GrandParentClass'));