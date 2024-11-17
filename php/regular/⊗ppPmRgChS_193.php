<?php
#№1
$str = 'aba aea aca aza axa';
echo preg_replace('#a[bex]a#', '!', $str) . '</br>';

#№2
$str = 'a1a a3a a7a a9a aba';
echo preg_replace('#a[3-6]a#', '!', $str) . '</br>';

#№3
$str = 'aba aea afa aha aga';
echo preg_replace('#a[a-g]a#', '!', $str) . '</br>';

#№4
$str = 'aba aea afa aha aga';
echo preg_replace('#a[a-fj-z]a#', '!', $str) . '</br>';

#№5
$str = 'aAa aea aEa aJa a3a';
echo preg_replace('#a[a-fA-D]a#', '!', $str) . '</br>';

#№6
$str = 'aAXa aeffa aGha aza ax23a a3sSa';
echo preg_replace('#a[a-z]+a#', '!', $str) . '</br>';

#№7
$str = 'aAXa aeffa aGha aza ax23a a3sSa';
echo preg_replace('#a[a-zA-Z]+a#', '!', $str) . '</br>';

#№8
$str = 'aAXa aeffa aGha aza ax23a a3sSa';
echo preg_replace('#a[a-z0-9]+a#', '!', $str) . '</br>';

echo  '<br></br><a href="regular.php">Назад</a>';
?>