<?php
#№1
$str = '12:59:59';
$reg  = preg_match('#(?<h>\d{2}):(?<m>\d{2}):(?<s>\d{2})#', $str, $match) . '</br>';

#№2 
foreach ($match as $key => $value) {
	if (preg_match('#\d+#', $key)) {
		unset($match[$key]);
	}
}
var_dump($match);

echo  '<br></br><a href="regular.php">Назад</a>';
?>