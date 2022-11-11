<?php

$someVar = 10;

function modifySomeVar(): void
{
	global $someVar; // обращение ко внешней переменной
	$someVar = 20;
}

modifySomeVar();

echo $someVar; // на печать будет выведено 20
