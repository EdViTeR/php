<?php
#№1
$str = 'a1a a2a a3a a4a a5a aba aca';
echo preg_replace('#a\da#', '!', $str) . '</br>';

#№2
$str = 'a1a a22a a333a a4444a a55555a aba aca';
echo preg_replace('#a\d+a#', '!', $str) . '</br>';

#№3
$str = 'aa a1a a22a a333a a4444a a55555a aba aca';
echo preg_replace('#a\d*a#', '!', $str) . '</br>';

#№4
$str = 'avb a1b a2b a3b a4b a5b abb acb';
echo preg_replace('#a\Db#', '!', $str) . '</br>';

#№5
$str = 'ave a#b a2b a$b a4b a5b a-b acb';
echo preg_replace('#a\Wb#', '!', $str) . '</br>';

#№6
$str = 'ave a#a a2a a$a a4a a5a a-a aca';
echo preg_replace('#\s#', '!', $str) . '</br>';

echo  '<br></br><a href="regular.php">Назад</a>';
?>