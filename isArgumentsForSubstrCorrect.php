<?php
function isArgumentsForSubstrCorrect ($str, $ind, $length)
{

	if($length < 0) {
		return false;
	}else if ($ind < 0){
		return false;
	}else if ($ind > strlen($str) -1){
		return false;
	}else if ($length + $ind > strlen($str)){
		return false;
	}return true;

}
