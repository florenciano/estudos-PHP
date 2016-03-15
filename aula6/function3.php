<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funções em PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<?php 
		// passagem de parâmetros por valor
		function teste($x) {
			$x += 2;
			echo "<p>O valor de X <em>(fn)</em> é <mark>$x</mark></p>"; // 52
		}

		$a = 50;
		teste($a);
		echo "<p>O valor de A é <mark>$a</mark></p>"; // 50

		echo "<p> - - -</p>";

		// passagem de parâmetros por referência
		function teste2(&$y) {
			$y -= 2;
			echo "<p>O valor de Y <em>(fn)</em> é <mark>$y</mark></p>"; // 98
		}

		$b = 100;
		teste2($b);
		echo "<p>O valor de b é <mark>$b</mark></p>"; // 98
	?>
</body>
</html>