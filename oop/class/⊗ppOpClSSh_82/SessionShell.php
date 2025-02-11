<?php

/**
 * 
 */
class SessionShell {
	
	function __construct() {
		if (!isset($_SESSION)) {
			session_start();
		}
	}

	public function set($name, $value) {
		if (!$this->exist($name)) {
			$_SESSION[$name] = $value;
		}
	}

	public function get($name) {
		return $_SESSION[$name];
	}

	public function del($name) {
		unset($_SESSION[$name]);
	}

	public function exist($name){
		if (isset($_SESSION[$name])) {
			return true;
		} else {
			return false;
		}
	}

	public function destroy() {
		session_destroy();
	}
}
?>