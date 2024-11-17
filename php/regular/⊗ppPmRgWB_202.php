<?php
#№1
$str = 'aaa xaa aaa xbb aaa';
echo preg_replace('#\bx[a-z]+#', '!', $str);

echo  '<br></br><a href="regular.php">Назад</a>';
?>