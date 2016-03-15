<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Brincando :]</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style>
		.panel {
			width: 60%;
			margin: 1em auto 0;
		}
	</style>
</head>
<body>

	<div class="panel panel-default">
		<div class="panel-heading">
			<?php 
			$t = isset($_GET["nome"]) ? $_GET["nome"] : false;
			echo "Termo procurado: <em>$t</em>";
			?>		
		</div>
  		<div class="panel-body">
			<?php 
				// convertendo a string ao contrário
				$r = ucwords(strrev(strtolower(trim($t))));
				echo "<h3><mark>$r</mark></h3>";
			?>
			<hr>
			<p><a href="function6b.php" class="btn btn-primary">Outra pesquisa</a></p>
  		</div>
	</div>
</body>
</html>