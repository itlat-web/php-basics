<?php

$param = 20;

function modifyParam(int &$paramWithOtherName): void
{
	$paramWithOtherName = 100;
}

modifyParam($param);

echo $param; // на печать будет выведено 100
