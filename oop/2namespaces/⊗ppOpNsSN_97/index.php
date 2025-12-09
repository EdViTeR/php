<?php

require_once 'modules/cart/Cart.php';
require_once 'modules/shop/cart/Cart.php';

$data = new \Modules\Cart\Cart;
$value = new \Modules\Shop\Cart\Cart;

echo $data->getData() . ' ' . $value->getData();