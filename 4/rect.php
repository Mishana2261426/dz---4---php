<?php

	include_once 'figure.php';

	class Rect implements Figure {
		protected $a;
		protected $b;

		public function __construct($a, $b) {
			$this->a = $a;
			$this->b = $b;
		}

		public function Area() {
			$s = $this->a * $this->b;
			return $this->a . '*' . $this->b . '=' . $s . "\n";
		}
	}

	$rect = new Rect('10', '5');
	echo $rect->Area();