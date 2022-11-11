<?php

/*
	функция может иметь параметры (в данном случае это $a и $b), 
	а так же возвращаемое значение (return), которе будет 
	подставлено в то место, где вызывается функция
*/
function calculateSum(int $a, int $b): int
{
	$sum = $a + $b; // здесь находится
	return $sum;    // тело функции
}

// значение переменной $resultOfSumFunction будет равно 30
$resultOfSumFunction = calculateSum(10, 20);

// функции могут участвовать в выражениях как операнды
$res = calculateSum(1, 2) + calculateSum(3, 4);

echo $res;