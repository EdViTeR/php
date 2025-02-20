<?php

// №1
$json = '{
	"user": {
		"name": "john",
		"surn": "smit"
	},
	"city": "London"
}';

$data = json_decode($json);
echo $data->user->name . ' ' . $data->user->surn . ' ' . $data->city . '</br>';

// №2
$json = '{
	"ru": ["пн", "вт", "ср"],
	"en": ["mn", "tu", "wd"]
}';

$data = json_decode($json);
echo $data->ru[2];
