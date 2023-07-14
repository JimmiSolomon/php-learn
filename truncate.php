function truncate ($str, $num)
{
	$cut = substr($str, 0, $num);
	return "{$cut}...";
}
