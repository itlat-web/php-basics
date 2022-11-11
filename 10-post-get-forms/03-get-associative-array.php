<?php

/* подразумевается запрос: /10-post-get-forms/03-get-associative-array.php?nums[a]=1&nums[b]=2 */

// проверка на GET запрос
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	// проверка на существование параметра nums, а также проверка на то, что он является массивом
	if (isset($_GET['nums']) && is_array($_GET['nums'])) {
		$nums = $_GET['nums'];
		
		// проверка на существование значения с ключом a, а также проверка на то, что это значение не является массивом
		if (isset($nums['a']) && is_scalar($nums['a'])) {
			echo 'a: ', strip_tags($nums['a']);
		}
		
		echo '<br>';
		
		if (isset($nums['b']) && is_scalar($nums['b'])) {
			echo 'b: ', strip_tags($nums['b']);
		}
	}
}
