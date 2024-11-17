<?php
#№1
$str = 'func1() func2() func3()';
preg_match_all('#[a-z\d]+(?=\()#', $str, $arr);
var_dump($arr);

#№2
$str = '<a href="" class="eee" id="zzz">';
preg_match_all('#[a-z]+(?==)#', $str, $arr);
var_dump($arr);

#№3
$str = '$aaa $bbb $ccc';
preg_match_all('#(?<=\$)[a-z\d]+#', $str, $arr);
var_dump($arr);

echo  '<br></br><a href="regular.php">Назад</a>';