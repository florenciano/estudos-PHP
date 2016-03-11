<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Integrando formulários</title>
</head>
<body>
	<?php 
		$v = $_GET["numb"];
		echo "<p>O valor enviado foi <strong>$v</strong> e a sua raiz quadrada é: " .sqrt($v) ."</p>";
	?>
	<p><a href="formulario.html">Voltar</a></p>
</body>
</html>