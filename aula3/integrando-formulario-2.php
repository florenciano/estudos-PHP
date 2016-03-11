<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Integrando formulários</title>
</head>
<body>
	<?php 
		// get variables from form
		$nome = isset($_GET["nome"]) ? $_GET["nome"] : "Não informado";
		$ano = isset($_GET["ano-nascimento"]) ? $_GET["ano-nascimento"] : 0;
		$sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "Sem sexo";
		$idade = date("Y") - $ano;

		echo "<p>$nome tem $idade anos de idade. O sexo é $sexo.</p>";
	?>
	<p><a href="formulario-2.html">Voltar</a></p>
</body>
</html>