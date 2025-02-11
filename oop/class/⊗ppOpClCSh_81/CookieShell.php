<?php

/**
 * 
 */
class CookieShell {
	
	public function set($name, $value, $time) {
		setcookie($name, $value, time() + $time);
		$this->counter($name);
		$_COOKIE[$name] = $value;
	}

	public function get($name) {
		if ($this->exist($name)) {
			return $_COOKIE[$name];
		} else {
			return null;
		}
	}

	public function del($name) {
		setcookie($name, '', time());
		unset($_COOKIE[$name]);
	}

	public function exist($name) {
		if (isset($_COOKIE[$name])) {
			return true;
		} else {
			return false;
		}
	}

	public function counter($name) {
		if (!isset($_COOKIE['counter'])) { // первый заход на страницу
			setcookie('counter', 1);
			$_COOKIE['counter'] = 1;
		} else {
			setcookie('counter', ++$_COOKIE['counter']);
		}
	}
}