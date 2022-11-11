<?php

/*
	эта переменная $result ничего не знает о переменной 			
	с таким же названием внутри функции divide
*/
$result = 10;

function divide(int $a, int $b): int
{
	$result = $a / $b;
	return $result;
}

echo divide(10, 2); // на печать будет выведено 5

echo '<br>';

echo $result;       // на печать будет выведено 10
