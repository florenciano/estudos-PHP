<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aula 2</title>
</head>
<body>
	<p>
		<?php
			// Operadores de atribuição
			$preco = $_GET["p"];
			echo "<p>O preço do produto é: R$ ".number_format($preco,2,",",".")."</p>";
			echo "<p>O preço do produto com aumento de 12%: R$ ".number_format( $preco +=( $preco*12/100 ),2,",",".")."</p>";
			$anoAtual = 2014;
			echo "<p>O ano atual é $anoAtual.</p>";
			echo "<p>O ano anterior é " . --$anoAtual . "</p>";
			// $anoAtual agora vale: 2013
			++$anoAtual;
			// $anoAtual agora volta valer: 2014
			echo "<p>O ano posterior é " . ++$anoAtual . "</p>";

			// Variáveis referenciais
			$a = 10; $b = 30; $c = &$b;
			echo "$a  $b  $c ";
			$b = 45;
			echo "O valor de C é: " . $c; // 45

			// Variáveis das variáveis
			$x = 123;
			$$x = 456;
			echo "<p>O valor da variável x é $x</p>";
			echo "<p>O variável 456 recebeu o valor de $123</p>";
		?>	
	</p>
</body>
</html>