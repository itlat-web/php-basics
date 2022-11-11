<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>My Site</title>
	</head>
	<body>
		<div>
			<?php
				// проверка на GET запрос
				if ($_SERVER['REQUEST_METHOD'] === 'GET') {
					// проверка на существование параметра title, а также проверка на то, что он не является массивом
					if (isset($_GET['title']) && is_scalar($_GET['title'])) {
						$title = $_GET['title'];
						echo 'Title: ', strip_tags($title);
					}
					
					echo '<br>';
					
					if (isset($_GET['body']) && is_scalar($_GET['body'])) {
						$body = $_GET['body'];
						echo 'Body: ', strip_tags($body);
					}
				}
			?>
		</div>
		<hr>
		<form action="/10-post-get-forms/04-get-form.php" method="GET">
			Title: <input type="text" name="title">
			<br><br>
			Body: <textarea name="body"></textarea>
			<br><br>
			<button type="submit">Submit</button>
		</form>
	</body>
</html>
