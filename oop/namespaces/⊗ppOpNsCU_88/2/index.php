<?php
// №2
namespace Core\Admin;

class Controller {
	
}

//////////////////////////////

namespace Users;

use \Core\Admin\Controller;

class Page Controller {
	
}

// №3
namespace Project;
use \Core\Admin\Model;
use \Core\Users\Storage\Data;

class Test {
	public function __construct()
	{
		$model = new Model;
		$data  = new Data;
	}
}

// №4
namespace Core\Storage;

use DataBase;

class Model {

	public function __construct() {
		$database  = new DataBase;
	}
}
?>