<?php
require_once 'iFile.php';

/**
 * №1
 */
class File implements iFile {
	
	private $filePath;

	function __construct($filePath) {
		$this->filePath = $filePath;
	}

	public function getPath() {
		return $this->filePath;
	}
	public function getDir() {
		return __DIR__;
	}
	public function getName() {
		return basename($this->filePath);
	}
	public function getExt() {
		return end(explode('.', $this->filePath));;
	}
	public function getSize() {
		return filesize($this->getName());
	}
	
	public function getText() {
		return file_get_contents($this->filePath);
	}
	public function setText($text) {
		file_put_contents($this->filePath, $text);
	}
	public function appendText($text) {
		$fileText = file_get_contents($this->filePath);
		file_put_contents($this->filePath, $fileText . $text);
	}
	
	public function copy($copyPath) {
		copy($this->filePath, $copyPath);
	}
	public function delete() {
		unlink($this->filePath);
	}
	public function rename($newName) {
		rename($this->filePath, $newName);
	}
	public function replace($newPath) {
		mkdir($newPath);
		rename($this->getName(), $newPath . '/' . $this->getName());
	}
}

$filePath = new File('C:\OpenServer\domains\php\oop\class\⊗ppOpClFl_58/test.txt');
echo $filePath->getPath() . '</br>';
echo $filePath->getDir() . '</br>';
echo $filePath->getName() . '</br>';
echo $filePath->getExt() . '</br>';
echo $filePath->getSize() . '</br>';
echo $filePath->getText() . '</br>';
echo $filePath->setText('Устанавливаем текст файла') . '</br>';
echo $filePath->appendText('Добавляем текст') . '</br>';
echo $filePath->copy('copy.txt') . '</br>';
// echo $filePath->delete() . '</br>';
// echo $filePath->rename('newName.txt') . '</br>';
echo $filePath->replace('newFolder') . '</br>';