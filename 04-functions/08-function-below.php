<?php

echo sumThreeNumbers(10, 20, 30); // выведется 60

// функция объявлена ниже, чем она вызывается!
function sumThreeNumbers(int $a, int $b, int $c): int
{
	return $a + $b + $c;
}
