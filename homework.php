<?php

/*
	объявляем функцию с с тремя параметрами:
	1. оплата за час работы (тип float) - $salaryPerHour
	2. количество рабочих часов в день (тип int) - $hoursPerDay
	3. количество отработанных дней (тип int) - $days
*/
function calculateSalary(float $salaryPerHour, int $hoursPerDay, int $days): float
{
	return  $salaryPerHour * $hoursPerDay * $days;
}

// записываем результат выполнения функции для 10 евро в час, 8 часов работы в день и 20 рабочих дней
$totalSalary = calculateSalary(10, 8, 20);

// проверяем, хватает ли человеку денег на оплату счетов
if ($totalSalary > 1500) { // если общая оплата больше чем 1500 евро - ему хватает
	echo 'Ура, я могу оплатить все счета!';
} else { // если оплата равна или менее 1500 евро - надо искать другую работу
	echo 'Пора найти работу с лучшей оплатой труда!';
}
