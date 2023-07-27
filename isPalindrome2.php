<?php
function isPalindrome2 ($word){
	$length = mb_strlen($word);
	for ($i = 0; $i < $length / 2; $i++) {
		if (mb_substr($word, $i, 1) != mb_substr($word, $length - $i - 1, 1)) {
			return false;
		}

}
	return true;
}
