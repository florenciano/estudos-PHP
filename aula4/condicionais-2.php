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
		$n = isset($_GET["numero"]) ? $_GET["numero"] : 0;
		$o = isset($_GET["op"]) ? $_GET["op"] : "op-dobro";

		switch ($o) {
			case "op-dobro":
				$r = $n * 2;
				break;
			
			case "op-cubo":
				$r = pow($n,3);
				break;

			case "op-raiz":
				$r = sqrt($n);
				break;

			default:
				$r = "Impossível calcular";
				break;
		}

		echo "<p>A operação solicitada foi <span>$n</span> e o resultado é <span>$r</span>.</p>";
	?>
	<p><a href="condicionais-2.html">Voltar</a></p>
</body>
</html>