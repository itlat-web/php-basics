<?php

$str = 'Hello';

echo $str[0], '<br>'; // выведется H

echo $str[1], '<br>'; // выведется e

/*
	если мы хотим узнать длину строки с латинскими 
	буквами, надо использовать встроенную функцию strlen:
*/
echo strlen($str); // выведется 5