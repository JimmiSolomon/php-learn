<?php
functinon invCase ($text) {
	$result = '';
	for ($i = 0; $i < strlen($text); $i++){
		$char = mp_substr($text, $i, 1);
		if ($char === mb_strtoupeer($char)){
			$result = $result . strtolower($char);
		} else {
			$result = $result . mb_strtoupper($char);
		}
	} return $result;
}
