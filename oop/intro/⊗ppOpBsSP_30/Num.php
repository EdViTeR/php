<?php

/**
 * №1
 */
// class Num {
// 	public static $num1;
// 	public static $num2;
// }

// Num::$num1 = 2;
// Num::$num2 = 3;
// echo Num::$num1 + Num::$num2;

/**
 * №2
 */
class Num {
	private static $num1 = 2;
	private static $num2 = 3;

	// №3
	public static function getSum() {
		return self::$num1 + self::$num2;
	}
}

echo Num::getSum();