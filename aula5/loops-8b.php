<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condições em PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style>
		.result {
			color: DeepPink;
			text-transform: uppercase;
		}
		h4 { line-height: 1.875em; }
	</style>
</head>
<body>
	<?php 
		// valor do input
		$n = isset($_GET["num"]) ? $_GET["num"] : 0;
		// mostra o valor no título da pag
		echo "<h1>Analisando o número <mark>$n</mark>...</h1>";
		// monte o subtítulo..
		echo "<h4>Valores múltiplos:";
		$total = 0;
		for ($i = 1; $i <= $n; $i++) {	// faça um loop para valor.
			if($n % $i == 0) { 			// Se o dividendo for exato..
				$r = $i; 				// ... guarde o nº.
				$total++;				// Faça uma contagem de qtos dividendos exatos tem
				echo " <mark>$r</mark>";
			}
		}
		echo "</h4>"; // fechando o subtítulo
		// mostre a qtde de dividendos
		echo "<h4>Total de múltiplos: <mark>$total</mark></h4>";
		// descobrindo se é primo
		if ($total == 2) {
			$display = "é primo!";
		} else {
			$display = "não é primo!";
		}
		// mostro resultado se primo
		echo "<h2>Resultado : <mark>$n</mark> <span class='result'>$display</span></h2>";
		
	?>
	<p><a href="loops-8.php" class="btn btn-primary">Voltar</a></p>
</body>
</html>