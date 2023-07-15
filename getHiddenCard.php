<?php

function getHiddenCard ($num, $star = 4)
{
	$cut = substr($num, 12);
	return str_repeat('*', $star) . $cut;
}
