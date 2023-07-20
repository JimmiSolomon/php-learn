<?php
function convertText($text)
{
	$firstChar = $text[0];
	return ($firstChar === strtoupper($firstChar)) ? $text : strrev($text);
}
