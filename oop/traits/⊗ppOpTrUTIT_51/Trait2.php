<?php
require_once 'Trait1.php';


trait Trait2 {

	use Trait1;

	public function method3() {
		return 3;
	}

}