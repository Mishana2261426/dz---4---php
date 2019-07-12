<?php
	include_once 'trait1.php';
	include_once 'trait2.php';
	include_once 'trait3.php';

	class Test {
		use Trait1;
		use Trait2;
		use Trait3;

		public function getSum() {
			echo self::method1() . '+' . self::method2() . '+' . self::method3() . '=';
			echo self::method1() + self::method2() + self::method3() . "\n";

		}
	}

	Test::getSum();