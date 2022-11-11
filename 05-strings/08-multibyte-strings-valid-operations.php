<?php

$str = 'Всё будет работать!';

echo mb_substr($str, 0, 1); // выведется В

echo '<br>';

echo mb_substr($str, 1, 1); // выведется c

echo '<br>';

echo mb_strlen($str); // выведется 19

echo '<br>';

echo mb_substr($str, 4, 5); // взятие подстроки — выведется 'будет'
