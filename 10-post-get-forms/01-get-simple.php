<?php

/* подразумевается запрос: /10-post-get-forms/01-get-simple.php?name=John&surname=Smith */

// проверка на GET запрос
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	// проверка на существование параметра name, а также проверка на то, что он не является массивом
	if (isset($_GET['name']) && is_scalar($_GET['name'])) {
		$name = $_GET['name'];
		
		/* 
			strip_tags удаляет все тэги - необходимо обезопасить
			приложение от возможной атаки злоумышленника
		*/
		echo 'Name: ', strip_tags($name); 
	}
	
	echo '<br>';
	
	if (isset($_GET['surname']) && is_scalar($_GET['surname'])) {
		$surname = $_GET['surname'];
		echo 'Surname: ', strip_tags($surname);
	}
}
