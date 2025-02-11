<?php
// №1
namespace Project;

use \Resource\Controller\Page as ControllerPage;
use \Resource\Controller\Page as ModelPage;

class Test {
	public function __construct() {
		$pageController  = new ControllerPage;
		$pageModel       = new ModelPage;
	}
}

// №2
namespace Project\Data;

use \Controller\Page as ControllerPage;
use \Controller\Page as ModelPage;

class Test {
	public function __construct() {
		$pageController  = new ControllerPage;
		$pageModel       = new ModelPage;
	}
}
?>