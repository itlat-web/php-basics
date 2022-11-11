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
					// проверка на существование параметра address, а также проверка на то, что он является массивом
					if (isset($_POST['address']) && is_array($_POST['address'])) {
						$address = $_POST['address'];
						
						// проверка на существование значения с ключом city, а также проверка на то, что это значение не является массивом
						if (isset($address['city']) && is_scalar($address['city'])) {
							echo 'City: ', strip_tags($address['city']);
						}
						
						echo '<br>';
						
						if (isset($address['street']) && is_scalar($address['street'])) {
							echo 'Street: ', strip_tags($address['street']);
						}
					}
				}
			?>
		</div>
		<hr>
		<form action="/10-post-get-forms/07-post-associative-array.php" method="POST">
			City: <input type="text" name="address[city]">
			<br><br>
			Street: <input type="text" name="address[street]">
			<br><br>
			<button type="submit">Submit</button>
		</form>
	</body>
</html>
