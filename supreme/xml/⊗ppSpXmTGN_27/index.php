<?php

// №1
$xml = simplexml_load_file('1.xml');

foreach ($xml as $key => $value) {
	echo $value->name . ' ' . $value->surn . '<br>';
}
echo '<br>';

// №2
$xml = simplexml_load_file('2.xml');
foreach ($xml as $key => $value) {
	echo $value->name . ' ' . $value->category . ' ' . $value['cost'] . ' ' . $value['amount'] . '<br>';
}