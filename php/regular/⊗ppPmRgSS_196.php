<?php
#№1
$str = 'aba aea aca aza axa a.a a+a a*a';
echo preg_replace('#a[.+*]a#', '!', $str) . '</br>';

#№2
$str = 'xaz x.z x3z x@z x$z xrz';
echo preg_replace('#x[^.@$]z#', '!', $str);
?>