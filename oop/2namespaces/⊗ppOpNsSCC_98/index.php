<?php

require_once 'Cart.php';
require_once 'UserCart.php';

$usercart = new \Modules\Shop\UserCart;
echo $usercart->getA();
echo $usercart->getB();