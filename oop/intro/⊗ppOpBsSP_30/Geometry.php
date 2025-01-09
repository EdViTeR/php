<?php

/**
 * 
 */
class Geometry {
	private static $pi = 3.14;
	
	public static function getCircleSquare($radius) {
		return self::$pi * $radius * $radius;
	}
	
	public static function getCircleСircuit($radius){
		return 2 * self::$pi * $radius;
	}
	
	public static function getBallSize($radius){
		return 4 / 3 * self::$pi * $radius**3;
	}
}

echo Geometry::getBallSize(10);