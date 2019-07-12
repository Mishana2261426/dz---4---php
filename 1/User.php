<?php

	class User {
		public static $count;

		public function __construct() {
			self::$count++;
		}
	}

	$test1 = new User();
	$test2 = new User();
	$test3 = new User();
	$test4 = new User();

	echo User::$count . "\n";