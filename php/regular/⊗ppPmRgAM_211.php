<?php
#№1
$str = 'a aa aaa bbb 1 123 12345125';
echo preg_match_all('#\d+#', $str);
?>