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
					// проверка на существование параметра firstname, а также проверка на то, что он не является массивом
					if (isset($_POST['firstname']) && is_scalar($_POST['firstname'])) {
						$firstname = $_POST['firstname'];
						echo 'Firstname: ', strip_tags($firstname);
					}
					
					echo '<br>';
					
					if (isset($_POST['lastname']) && is_scalar($_POST['lastname'])) {
						$lastname = $_POST['lastname'];
						echo 'Lastname: ', strip_tags($lastname);
					}
				}
			?>
		</div>
		<hr>
		<form action="/10-post-get-forms/05-post-simple.php" method="POST">
			Firstname: <input type="text" name="firstname">
			<br><br>
			Lastname: <input type="text" name="lastname">
			<br><br>
			<button type="submit">Submit</button>
		</form>
	</body>
</html>
