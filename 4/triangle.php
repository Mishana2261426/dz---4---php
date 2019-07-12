<?php

	include_once 'figure.php';

	class Triangle implements Figure {
		protected $a = '0.5';
		protected $b;
		protected $c;

		public function __construct($b, $c) {
			$this->b = $b;
			$this->c = $c;
		}

		public function Area() {
			$s = $this->a * $this->b * $this->c;
			return $this->a . '*' . $this->b . '*' . $this->c . '=' . $s . "\n";
		}
	}

	$triangle = new Triangle('87', '16');
	echo $triangle->Area();