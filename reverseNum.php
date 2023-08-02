<?php
function reverse(int $number): int {
	$reversedNumber = 0;
	while ($number != 0) {
		$reversedNumber = $reversedNumber * 10 + $number % 10;
		$number = (int)($number / 10);

	}
	return $reversedNumber;
}
