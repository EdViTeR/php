<?php
require_once 'SessionShell.php';

$session = new SessionShell();
$session->set('first', 'Первая сессия');
$session->get('first');
$session->del('first');
$session->set('second', 'Вторая сессия');
$session->del('second');
$session->destroy();
var_dump($_SESSION); die;
?>