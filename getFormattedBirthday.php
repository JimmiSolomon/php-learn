<?php
function getFormattedBirhday ($date, $month, $year)
{
	$formatted = sprintf("%02d-%02d-%02d", $date, $month, $year);
	return $formatted;
}
