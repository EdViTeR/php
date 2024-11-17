<?php
#№1
$str = 'ahb acb aeb aeeb adcb axeb';
echo preg_replace('#a.b#', '!', $str) . '</br>';

#№2
$str = 'ahb acb aeb aeeb adcb axeb';
echo preg_replace('#a..b#', '!', $str);

echo  '<br></br><a href="regular.php">Назад</a>';
?>