<?php
function ivertCase ($text)
{
	$result = '';
	for ($i = 0; $i < mb_strlen($text); $i++){
		$char = mb_substr($text, $i, 1);
		if ($char === mb_strtoupper($char)){
			$result = $result . mb_strtolower($char);
		}else {
			$result = $result . strtoupper($char);
		}
	}return $result;
}
