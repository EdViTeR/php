<?php

$xml = simplexml_load_file('1.xml');
echo $xml->tag1->tag2->tag3;