<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condições em PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style>
		.container {
			width: 90%;
			margin: 1em auto;
			padding: 1em;
			border: 1px solid #ccc;
		}
		.container .display {
			padding: .5em;
			font-size: 1.5em;
			color: red;
			display: inline-block;;
		}
	</style>
</head>
<body>
	<?php
		$nInit = isset($_GET["number-init"]) ? $_GET["number-init"] : 0;
		$nEnd = isset($_GET["number-end"]) ? $_GET["number-end"] : 1;
		$incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : 1;
	?>
	<div class="container">
		<?php 
			while ($nInit <= $nEnd) {
				echo "<span class='display'>$nInit</span>";
				$nInit += $incremento;
			}

			while ($nInit >= $nEnd) {
				echo "<span class='display'>$nInit</span>";
				$nInit -= $incremento;
			}
		?>
	</div>
	<p><a href="loops-3.html">Voltar</a></p>
</body>
</html>