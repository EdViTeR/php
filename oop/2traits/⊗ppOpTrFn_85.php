<?php

trait Trait1 {}

var_dump(trait_exists('Trait1'));
var_dump(trait_exists('Trait2'));
var_dump(get_declared_traits());