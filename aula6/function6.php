<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funções em PHP - string</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<?php 
		// fn String

		// 14] strtolower : transforma todos os caracteres em minúsculos
		$string1 = strtolower("Lorem ipsum dolor sit amet. Consectetur Adipisicing Elit.");
		echo "<p><mark>$string1</mark></p>";

		// 15] strtoupper : oposto ao anterior
		$string2 = strtoupper("Lorem ipsum dolor sit amet, consectetur adipisicing elit.");
		echo "<p><mark>$string2</mark></p>";

		// 16] ucfirst : 1º caractere da sentença em maiúscula. Não mexer nos demais
		$string3 = ucfirst("rodrigo floRenciaNo");
		echo "<p><mark>$string3</mark></p>";

		echo "<p><mark>".ucfirst(strtolower(trim("  rodrigo FlOrEnCIaNO  ")))."</mark></p>";

		// 17] ucwords : primeiro caractere de cada sentença em maiuscula
		echo "<p><mark>".ucwords("Lorem ipsum dolor sit amet, consectetur.")."</mark></p>";

		// 18] strrev : reverse de uma string
		$string4 = ucwords(strrev("Raquel Barbosa"));
		echo "<p><mark>$string4</mark></p>";

		// 19] strpos : indica a posição de ocorrências de uma string dentro de uma string
		$string5 = "Lula na cadeia";
		echo "<p>";
		echo(strpos($string5, "cadeia")); // case sensitive
		echo "</p>";

		// 20] stripos : mesma q anterior mas sem frescura de case sensitive
		$string6 = "Lula na cadeia";
		echo "<p>";
		echo(stripos($string6, "CadEiA")); // case sensitive
		echo "</p>";

		// 21] substr_count : qtde de ocorrencias dentro de uma string
		$string7 = "Suco de uva ontem, suco de uva hoje e suco de uva amanhã.";
		$qtdeOcorrencia = substr_count($string7, "Uva"); // case sensitive
		echo "<p>Quantas uvas foram encontradas na frase: <em>$string7</em><br><mark>$qtdeOcorrencia</mark></p>";

		// 22] substr : extrai um string da string
		echo "<p><mark>".substr("Amores penros", 4)."</mark></p>"; // start, end. valores - começam do fim

		// 23] str_pad : caber uma string em uma string maior
		$string8 = "Rodrigo";
		$string8b = str_pad($string8,45,"#",STR_PAD_LEFT);
		echo "<p><mark>$string8b</mark></p>";

		//  24] str_repeat : repete uma string
		echo "<p>Eu quero o ".str_repeat("Lula na cadeia <mark>", 3*2)."</mark></p>";

		// 25] str_replace : substitui uma string de uma string por outra.
		$string9 = "Banana, chocolate, groselhas, biscoitos e ovos.";
		echo "<p><mark>";
		echo(str_replace("Banana", "Maça", $string9)); //  case sensitive, o contrário str_ireplace
		echo "</mark></p>";

	?>
</body>
</html>