<?php

require_once 'core/Controller.php';
require_once 'project/Controller.php';

$c1 = new \Core\Controller;
$c2 = new \Project\Controller;

echo $c1->getA() + $c2->getA();