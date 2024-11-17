<?php
#№1
$str = '^xx axx ^zz bkk @ss';
echo preg_replace('#[\^\@][a-z]{2}#', '!', $str) . '</br>';

#№2
$str = '^xx axx ^zz bkk @ss';
echo preg_replace('#[^\^^\@][a-z]{2}#', '!', $str) . '</br>';

#№3
$str = '^xx axx ^zz bkk';
echo preg_replace('#[^\^][a-z]{2}#', '!', $str);

echo  '<br></br><a href="regular.php">Назад</a>';
?>