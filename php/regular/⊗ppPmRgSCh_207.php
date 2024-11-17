<?php
#№1
$str = ' qwe fds432 jpgfsdf 123txt';
echo preg_match('#\d+#', $str) . '</br>';

#№2
echo preg_match('#^http#', $str) . '</br>';

#№3
echo preg_match('#^http|^https#', $str) . '</br>';

#№4
echo preg_match('#txt$|html$|php$#', $str) . '</br>';

#№5
echo preg_match('#jpg$|jpeg$#', $str) . '</br>';
?>