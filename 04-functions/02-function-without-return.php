<?php

/*
	функция может ничего не возвращать, тогда в качестве 
	возвращаемого типа следует указывать void
*/
function printSum(int $a, int $b): void
{
	$sum = $a + $b;
	echo $sum;
}

// возвращено ничего не будет, но на печать будет выведено 70
printSum(30, 40);
