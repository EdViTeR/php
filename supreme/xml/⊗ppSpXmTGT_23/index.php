<?php

$xml = simplexml_load_file('1.xml');
foreach ($xml as $key => $value) {
	echo $value . '<br>';
}