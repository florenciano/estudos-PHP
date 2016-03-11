<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condições em PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style>
		body { 
			background-color: #fafafa;
			text-align: center;
		}
		.container {
			border: 1px solid #e8e8e8;
			width: 50%;
			margin: 1em auto;
			display: block;
			background-color: #fff;
			font-size: 1.5em;
		}
		.container p { margin: .5em 0; }
		.line { margin: 0; }
		.container .line:last-child { display: none; }
	</style>
</head>
<body>
	<div class="main">
		<div class="container">
			<?php 
				$a = 1;
				$n = isset($_GET["tabuada"]) ? $_GET["tabuada"] : 1;
				do {
					echo "<p>$n X $a = <strong>" .($n * $a) ."</strong></p>";
					echo "<hr class='line'>";
					$a++;
				} while ($a <= 10);
			?>	
		</div>
		<p><a href="loops-6.php" class="btn btn-primary">Voltar</a></p>
	</div>
</body>
</html>