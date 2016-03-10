<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aula init</title>
</head>
<body>
	<p>
		<?php
			echo "<h1>Olá, Mundo</h1>";
			$numb = 35;
			$name = "Rodrigo";
			echo $name." tem ".$numb." anos!";
			echo "<p></p>";
			$n1 = 33;
			$n2 = 11;
			$s = $n1 * $n2;
			$s2 = $n1 / $n2;
			$s3 = $n1 % $n2;
			// pegando variaveis na URL
			$x = $_GET["x"];
			$y = $_GET["y"];
			$xy = $x * $y;
			echo "<p>A multiplicação entre $n1 e $n2 resulta em: <strong>$s</strong></p>";
			echo "<p>A divisão entre $n1 e $n2 resulta em: <strong>$s2</strong></p>";
			echo "<p>O resto entre a divisão de $n1 e $n2 resulta em: <strong>$s3</strong></p>";
			echo "<p>A soma vale <strong>".($n1+$n2)."</strong>";
			echo "<p></p>";
			echo "<p>Multiplicando as variaveis '$x' e '$y': <strong>$xy</strong></p>";
			// funções matemáticas
			echo "<p>Os valores de x é: ".$x." e o valor de y é: ".$y." abs(): ".abs($x)."</p>";
			echo "Os valores de x <sup>y</sup> é: ".pow($x, $y)."</p>";
			echo "A raiz de $x é: ".sqrt($x)."</p>";
			echo "A raiz de $x em moeda é: R$".number_format($x,2,",",".")."</p>";
		?>	
	</p>

</body>
</html>