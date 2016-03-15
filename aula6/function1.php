<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condições em PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<?php $x = 100; $y = 200; ?>
	<?php 
		function soma($a,$b) {
			$s = $a + $b;
			echo "<h3>$s</h3>";
		}
		soma(3,4);
		soma(69,58);
		soma($x,$y);
	?>

	<?php 
		function divide($a, $b) {
			return $a / $b;
		}
		echo "<h3>".divide($x,$y)."</h3>";
	?>
	<!-- <p><a href="loops-8.php" class="btn btn-primary">Voltar</a></p> -->
</body>
</html>