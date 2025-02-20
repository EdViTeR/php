<?php

$xml = simplexml_load_file('1.xml');
echo $xml->{'user-name'} . ' ' . $xml->{'user-surn'};