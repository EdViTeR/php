<?php

// №1
if (!file_exists('file.txt')) {
	// №2
	file_put_contents('file.txt', '!');
}

// №3
if (file_exists('message.txt')) {
	echo file_get_contents('message.txt');
}