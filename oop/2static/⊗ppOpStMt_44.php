<?php
class Math {
	
	public static function getSum($a, $b) {
		return $a + $b;
	}
	
	public static function getProduct($a, $b) {
		return $a * $b;
	}
}

echo Math::getSum(2,5);
echo Math::getProduct(2,5);
?>