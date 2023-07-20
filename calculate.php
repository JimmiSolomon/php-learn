<?php
function calculate ($oper, $num1, $num2)
{
	switch($oper){
		case '+':
		return $num1 + $num2;
		case '-':
		return $num1 - $num2;
		case '/':
		return $num1 / $num2;
		case '*':
		return $num1 * $num2:
		default:
		return null;
}
}
