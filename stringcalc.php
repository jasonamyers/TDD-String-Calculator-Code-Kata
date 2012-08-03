<?php

// String Calculator Code Kata 

class StringCalculator {

	public function add($string) {
		if (strlen($string) > 0) {
			$sum = 0;
			$numbers = preg_split("/[\\n|,]+/", $string);
			foreach($numbers as $number) {
				$sum += $number;
			}
			return $sum;
		} else {
			return 0;
		}
	}
}

?>