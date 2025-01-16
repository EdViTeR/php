<?php

$arr = [1, 2, 3, 4, 5];
file_put_contents('sum.txt', array_sum($arr));
echo 'готово';