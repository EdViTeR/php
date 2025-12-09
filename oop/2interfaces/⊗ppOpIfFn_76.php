<?php

interface iTest1 {}

var_dump(get_declared_interfaces());
var_dump(interface_exists('iTest1'));
var_dump(interface_exists('iTest2'));