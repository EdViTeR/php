<?php

function takeName() {
    $dir = scandir(__DIR__);
    foreach ($dir as $key => $value) {
        $res = preg_replace('#([^\d]+)#', '', basename($value));
        if (isset($res) && !empty($res)) {
            $arr[$res] = basename($value);
        }
    }
    return $arr;
}

$arr = takeName();

function takeLink($arr) {
    ksort($arr);
    foreach ($arr as $key => $value) {
        echo  "<a href='" . basename($value) . "'>" . basename($value) . "</a></br>";
    }
    return true;
}

takeLink($arr);

?>
