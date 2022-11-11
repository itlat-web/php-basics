<?php

/* подразумевается запрос: /10-post-get-forms/02-get-array.php?names[]=John&names[]=Mary */

// проверка на GET запрос
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	// проверка на существование параметра names, а также проверка на то, что он является массивом
	if (isset($_GET['names']) && is_array($_GET['names'])) {
		$names = $_GET['names'];
		print_r($names);
	}
}
