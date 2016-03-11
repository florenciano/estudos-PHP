<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		$ano = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
		$idade = date("Y") - $ano;
	?>
	<meta charset="UTF-8">
	<title>Condições em PHP</title>
	<style>
		strong {
			color: red;
		}
	</style>
</head>
<body>
	<?php
		echo "<p>Você nasceu em <strong>$ano</strong> e tem <strong>$idade</strong> anos de idade.</p>";
		if ($idade < 16) {
			$v = "NÃO vota";
			$d = "NÃO dirige";
		} elseif (($idade >=16 && $idade <18 || $idade > 65)) {
			$v = "Voto facultativo";
			$d = "NÃO dirige";
		} else {
			$v = "Voto obrigatório";
			$d = "Dirige SIM";
		}
		echo "<p>Com esta idade você <strong>$v</strong> e <strong>$d</strong>.</p>";
	?>
	<!-- outro exemplo -->
	<?php 
		$nota1 = $_GET["nota1"];
		$nota2 = $_GET["nota2"];
		$media = ($nota1 + $nota2 )/ 2;

		if ($media <= 5) {
			$resposta = "REPROVADO";
		} elseif ($media > 5 && $media < 7) {
			$resposta = "RECUPERAÇÃO";
		} else {
			$resposta = "APROVADO";
		}

		echo "<p>A média entre as notas <strong>$nota1</strong> e <strong>$nota2</strong> é: <strong>$media</strong>.</p>";
		echo "<p>A situação do aluno é: $resposta</p>";
	?>
	<p><a href="condicionais.html">Voltar</a></p>
</body>
</html>