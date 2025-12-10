<?php
namespace Project;

require_once 'Data.php';
use \Core\Users\Data;

class Test {
	
	public function __construct() {
		$data = new Data('user1');
		$data = new Data('user2');
		$data = new Data('user3');
	}


}
$test = new Test;
var_dump($test); die;
