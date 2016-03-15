<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funções em PHP - include</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<?php 
		/* 	
			Inclui o arquivo abaixo, caso não encontra
			o script continua rodando.
		*/
		// include 'function4b.php'; 
		include_once 'function4b.php'; // se eu não inclui antes, inclua agora. Se já incluso, ignore-o!

		echo "<h1>Título da página</h1>";
		ola();
		mostraValor(125);

		/* 	
			Inclui o arquivo abaixo, caso não encontra
			o script pára. Nenhuma linha de abaixo roda.
		*/
		// require 'function4x.php';
		require_once 'function4x.php'; // se eu não solicitei antes, solicite agora. Se já solicitado, ignore-o!
		
		echo "<p>Esta linha não aparecerá na tela.</p>";
	?>
</body>
</html>