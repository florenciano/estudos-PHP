<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condições em PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<p>
		<?php
			$c = 12;
			$x = 48; 
			do {
				echo "<span> $c </span>";
				$c++;
			} while($c <= $x);
		?>
	</p>
	<p>
		<?php
			$c2 = 12;
			$x2 = 48;
			do {
				echo "<span> $x2 </span>";
				$x2--;
			} while ($x2 >= $c2);
		?>
	</p>
	<p><a href="loops-4.html">Voltar</a></p>
</body>
</html>