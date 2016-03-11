<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condições em PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<?php
		$v = 0;
		while ($v <= 10) {
			echo"<p>$v</p>";
			$v++;
		}
		$v2 = 10;
		echo "<p>- - - + - - -</p>";
		while ($v2 >= 0) {
			echo "<p>$v2</p>";
			$v2 -= 2;
		}
	?>
</body>
</html>