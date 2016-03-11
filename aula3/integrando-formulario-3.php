<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		// get variables from form
		$t = isset($_GET["text"]) ? $_GET["text"] : "No text";
		$l = isset($_GET["lenght"]) ? $_GET["lenght"] : "14pt";
		$c = isset($_GET["color"]) ? $_GET["color"] : "#000000";
	?>
	<meta charset="UTF-8">
	<title>Integrando formulários</title>
	<style>
		.frase {
			font-size: <?php echo $l; ?>;
			color: <?php echo $c; ?>;
			font-family: sans-serif;
		}
	</style>
</head>
<body>
	<?php 
		echo "<p><span class='frase'>Display</span></p>";
	?>
	<p><a href="formulario-3.html">Voltar</a></p>
</body>
</html>