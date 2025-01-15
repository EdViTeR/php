<?php 
require_once 'Trait2.php';
/**
 * 
 */
class Test {
	
	use Trait2;

	function __construct() {
		echo $this->method1() + $this->method2() + $this->method3() . '<p>';
	}
}

$test = new Test;
var_dump(trait_exists('Trait1'));
var_dump(trait_exists('Trait2'));
var_dump(trait_exists('Trait3'));
var_dump(get_declared_traits());