<?php
	$arr[] = [1,2,3];
	$arr[] = [4,5,6];
	$arr[] = [7,8,9];

	foreach($arr as $k => $values) {
	echo 'Key: ' . $k . ' |  Value: ';
	echo implode(', ', $values) . '<br>';
}
