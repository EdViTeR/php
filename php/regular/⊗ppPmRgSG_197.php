<?php
#№1
$str = '11 1 ... x.z x@z aaaa fgh a q';
echo preg_replace('#[\d.]+#', '!', $str) . '</br>';

#№2 под вопросом????
echo preg_replace('#[^\d[a-g]{3,7}]#', '!', $str);

echo  '<br></br><a href="regular.php">Назад</a>';
?>