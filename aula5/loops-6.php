<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loops</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<form action="loops-6b.php" method="GET">
		<p>
			<label for="t">Selecione a unidade: </label>
			<select name="tabuada" id="t">
				<!-- criando o select dinamicamente -->
				<?php 
					$c = 1;
					while ($c <= 25) {
						echo "<option value='$c'>$c</option>";
						$c++;
					}
				?>
			</select>
		</p>
		<p><input type="submit" value="Gerar tabuada"></p>
	</form>
</body>
</html>