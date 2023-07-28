<?php
function palindrome ($text){
	
	if($text ===  strrev($text)){
	return true;
	} else {
	return false;
	}

}
