<?php

// функции могут быть анонимными и вызываться с помощью переменной
$substraction = function (int $a, int $b): int {
	return $a - $b;
};

// на печать будет выведено 4
echo $substraction(7, 3);
