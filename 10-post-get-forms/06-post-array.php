<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My Site</title>
	</head>
	<body>
		<div>
			<?php
				// проверка на POST запрос
				if ($_SERVER['REQUEST_METHOD'] === 'POST') {
					// проверка на существование параметра products, а также проверка на то, что он является массивом
					if (isset($_POST['products']) && is_array($_POST['products'])) {
						$products = $_POST['products'];
						print_r($products);
					}
				}
			?>
		</div>
		<hr>
		<form action="/10-post-get-forms/06-post-array.php" method="POST">
			1st product: <input type="text" name="products[]">
			<br><br>
			2nd product: <input type="text" name="products[]">
			<br><br>
			<button type="submit">Submit</button>
		</form>
	</body>
</html>
