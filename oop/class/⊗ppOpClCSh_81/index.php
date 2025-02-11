<?php
require_once 'CookieShell.php';

// $csh = new CookieShell;
// $csh->set('test', '123', 3600 * 24);

// echo $csh->get('test'); // выведет 123

$csh = new CookieShell;
$csh->set('test', '123', 3600 * 24);

// echo $csh->counter('test');
var_dump($_COOKIE);
// echo $csh->get('test'); // выведет null
