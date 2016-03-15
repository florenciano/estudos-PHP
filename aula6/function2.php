<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funções em PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<?php 
		// fn com múltiplos parâmetros
		function soma() {
			$p = func_get_args(); // cria um array [vetor] com todos os argumentos

			$t = func_num_args(); // retorna o nº argumentos do vetor
			echo "<p> Nº argumentos: $t</p>";

			$s = 0;
			for($i = 0; $i < $t; $i++) {
				$s += $p[$i];
			}
			return $s;
		}
		$res = soma(384,384,234,354,34,343,43,43,4869,7,676,668768,95,698,9,8,95);
		echo "<h3>$res</h3>";
	?>
</body>
</html>