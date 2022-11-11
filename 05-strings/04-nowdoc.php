<?php

$programmingLanguage = 'PHP';

/*
	nowdoc – еще один вариант объявления строки, когда 			
	учитываются все отступы, переносы строк, но переменные не 		
	подставляются; особенности обработки отступа закрывающей 		
	метки — такие же, как и в случае с heredoc
*/
$str = <<<'NOWDOC'
	I can write outer variables,
		for example $programmingLanguage ,
			but they will be shown without execution!
NOWDOC;

echo $str;
