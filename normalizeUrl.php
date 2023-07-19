<?php
function normalizeUrl ($url)

{
$ht = 'http://';
$hts = 'https://';

	if($ht === substr($url, 0, 7)){
		return 'https://' . substr($url, 7);
}	else if ($hts === substr($url, 0, 8)) {
		return $url;
}	else {
		return 'https://' . $url;
	}
}
