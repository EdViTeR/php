<?php

$xml = simplexml_load_file('1.xml');
echo $xml->user . ' ' . $xml->user['age'] . ' ' . $xml->user['salary'];