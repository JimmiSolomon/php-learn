<?php

use function  App\Symbols\isVowel;

function countVowelsx($text) {

	$len = strlen($text);
	$result = 0;

	for($i = 0; $i < $len; $i++){
		if (isVowel($text[$i])){
			$result += 1;
		}
	}
	return $result;
}
