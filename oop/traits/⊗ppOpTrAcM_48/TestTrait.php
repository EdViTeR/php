<?php
	trait TestTrait {
		// Приватный метод:
		private function method() {
			return '!!!';
		}
	}
	
	class Test {
		use TestTrait {
			TestTrait::method as public;
		} // подключаем трейт
		
		public function __construct()
		{
			// Используем приватный метод трейта:
			echo $this->method(); // выведет '!!!'
		}
	}
	
	new Test;
?>