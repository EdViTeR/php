<?php

$arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

echo "<select>";
foreach ($arr as $key => $value) {
	echo "<option value=" . $value .">" . $value . "</value>";
}
echo "</select>";