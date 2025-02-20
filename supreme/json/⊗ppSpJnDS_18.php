<?php

$arr = range(1, 100);
$data = json_encode($arr);
header('Content-Type: application/json');
echo $data;