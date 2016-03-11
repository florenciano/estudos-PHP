<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condições em PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<?php
		$init = 0;
		$n = isset($_GET["number"]) ? $_GET["number"] : 1;

		while ($init <= $n) {
			echo
				"<p>
					<label for='cx$init'>Caixa Nº " .$init ."</label><br>
					<input type='text' value='$init' id='cx$init'>
				</p>";
			$init++;
		}
	?>
	<p><a href="loops-2.html">Voltar</a></p>
</body>
</html>