<?php

	include_once 'figure.php';

	class Circle implements Figure {
		protected $a = '3.14';
		protected $b;

		public function __construct($b) {
			$this->b = $b;
		}

		public function Area() {
			$s = $this->a * ($this->b * $this->b);
			return $this->a . '*' . $this->b . '*' . $this->b . '=' . $s . "\n";
		}
	}

	$circle = new Circle('10');
	echo $circle->Area();