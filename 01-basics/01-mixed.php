<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
		<title>My Site</title>
	</head>
	<body>
		<div>
			Это будет проигнорировано PHP.
		</div>
		<div>
			<?php
				// ... PHP код
				echo 'Hello, I\'m PHP code!';
			?>
		</div>
		<div>
			Это также будет проигнорировано PHP.
		</div>
		<div>
			<?php
				// ... PHP код ещё раз
				echo 'Hello, I\'m PHP code again!';
			?>
		</div>
	</body>
</html>