<?php
$dir = scandir(__DIR__);
foreach ($dir as $key => $value) {
    echo  "<a href='" . basename($value) . "'>" . basename($value) . "</a></br>";
}
?>
