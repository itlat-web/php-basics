<?php

// истина
$bool1 = true; 
echo $bool1, '<br>';

// ложь	
$bool2 = false; 
echo $bool2, '<br>';

// true (истина) - сравнение на эквивалентность с учетом типа
$bool3 = 2 + 2 === 4; 
echo $bool3, '<br>';

// true (истина) - сравнение на эквивалентность без учета типа данных
$bool4 = 1.0 == 1; 
echo $bool4, '<br>';

// false (ложь) — выражение, схожее с предыдущим, но используется сравнение с учетом типа данных
$bool5 = '1' === 1; 
echo $bool5, '<br>';

// true (истина) - сравнение на отсутствие эквивалентности без учета типа данных
$bool6 = 1 + 1 != 3;
echo $bool6, '<br>'; 

// true (истина) - сравнение на отсутствие эквивалентности с учетом типа данных
$bool7 = 1.0 !== 1; 
echo $bool7, '<br>';

// true (истина)
$bool8 = '5' > 2; 
echo $bool8, '<br>';

// false (ложь)
$bool9 = 100 < 3; 
echo $bool9, '<br>';

// true (истина)
$bool10 = 7 >= 7; 
echo $bool10, '<br>';

// false (ложь)
$bool11 = 100 <= 3;
echo $bool11, '<br>';