<?php
#№1
$str = 'aaa$@bbb aaa$@$@bbb aaa$@$@$@bbb';
$reg = '#([a-z]+)(?:\$@)+([a-z]+)#';
preg_match_all($reg, $str, $res);
var_dump($res); die;
?>
