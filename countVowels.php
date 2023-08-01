<?php
function CountVowels ($str) {
	$vowels = ['a', 'e', 'i', 'o', 'u'];
	$count = 0;


	for($i = 0; $i < strlen($str); $i++) {
		if (in_array(strtolower($str[$i]), $vowels)){
			$count++;
		}
	}
	return $count;
}
