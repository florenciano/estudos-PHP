<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores relacionais e lógicos</title>
</head>
<body>
	<?php 
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		$tipo = $_GET["op"];
		echo "<p>Os valores são: $n1 e $n2</p>";
		$r = ($tipo == "*") ? $n1*$n2 : null;
		echo "<p>O resultado é: $r</p>";

		//  exemplo de operador ternário
		$av1 = 2; $av2 = 7.25; $av3 = 9.90;
		$media = ($av1 + $av2 + $av3) / 3;
		echo "<p>A média é: <strong>".number_format($media,"2")."</strong></p>";
		echo "<p>A situação do aluno é: " . ($media >= 7 ? "Aprovado" : "Reprovado") . "</p>" ;

		// exemplo de operador lógicos
		$anoNasc = $_GET["anoNasc"];
		$idade = 2016 - $anoNasc;
		echo "<p>Quem nasceu em $anoNasc tem $idade anos!</p>";

		$condVoto = ($idade >= 18 && $idade <= 64 ? "Obrigatório" : "facultativo");
		echo "<p>Portanto sua condição de voto é: <strong>$condVoto</strong></p>";
		
		$v1 = false;
		$v2 = true;
		$v3 = false;
		$res = $v1 xor $v2;
		echo "<p>$res</p>";
	?>
</body>
</html>