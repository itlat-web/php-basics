<?php 

$day = 4;
switch ($day) {
	/*
		можно писать одновременно несколько условий -	
		сase 1:
		case 2:
	*/
	case 1: 
		echo 'Понедельник';
		break;
	case 2:
		echo 'Вторник';
		break;
	case 3:
		echo 'Среда';
		break;
	case 4;
		echo 'Четверг'; // результат
		break;
	case 5:
		echo 'Пятница';
		break;
	case 6:
		echo 'Суббота';
		break;
	case 7;
		echo 'Воскресенье';
		break;
	default: // необязательный блок по умолчанию
		echo 'Неизвестный день недели';
}
