<?php
function isLeapYear($year)
{
	$result = $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0);
	return $result;
}
