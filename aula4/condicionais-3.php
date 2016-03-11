<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condições em PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style>
		span {
			color: red;
			font-size: 1.25em;
			font-family: sans-serif;
		}
	</style>
</head>
<body>
	<?php
		$ds = isset($_GET["ds"]) ? $_GET["ds"] : 0;

		switch ($ds) {
			case 2:
			case 3:
			case 4:
			case 5:
			case 6:
				echo "<p>Aula</p>";
				break;
			case 7:
			case 8:
				echo "<p>Não Aula</p>";
				break;
			default:
				echo "<p>Dia inválido</p>";
		}
	?>
	<p><a href="condicionais-3.html">Voltar</a></p>
</body>
</html>