<?php

$num = file_get_contents('count.txt');
file_put_contents('count.txt', ++$num);