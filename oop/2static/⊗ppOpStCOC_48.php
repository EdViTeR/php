<?php
class Test {
	public static function show() {
		return '+++';
	}
}

echo (new Test)::show();
$test = new Test;
echo $test::show();
?>