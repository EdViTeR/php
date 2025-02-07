<?php
require_once 'Tag.php';

/**
 * 
 */
class ListItem extends Tag {
	
	function __construct() {
		parent::__construct('li');
	}
}