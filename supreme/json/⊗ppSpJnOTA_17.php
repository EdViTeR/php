<?php

// №1
$json = '{
	"ru": ["пн", "вт", "ср"],
	"en": ["mn", "tu", "wd"]
}';

$data = json_decode($json, true);
echo $data['en']['1'];