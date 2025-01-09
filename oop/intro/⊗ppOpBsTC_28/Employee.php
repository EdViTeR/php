<?php
require_once 'Post.php';

/**
 * №3
 */
class Employee {
	
	public $name;
	public $surname;

	// №5
	function __construct($name, $surname, Post $post) {
		$this->name = $name;
		$this->surname = $surname;
		// №6
		$this->post = $post;
	}

	// №4
	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getSurname() {
		return $this->surname;
	}

	public function setSurname($name) {
		$this->surname = $surname;
	}

	// №9
	public function changePost(Post $post) {
		if ($post->name === 'Программист') {
			$post->name = 'Менеджер водитель';
		} else {
			$post->name = 'Программист';
		}
	}
}

// №7
$employee = new Employee('qwe', 'wer', $prog);
$employee->changePost($prog);
echo $employee->getName() . '|' . $employee->getSurname() . '|' . $employee->post->name . '|' . $employee->post->salary;
$employee->changePost($prog);
echo $employee->getName() . '|' . $employee->getSurname() . '|' . $employee->post->name . '|' . $employee->post->salary;