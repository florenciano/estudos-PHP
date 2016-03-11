<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condições em PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style>
		.fatorial {
			background-color: rgba(128, 0, 128, .1);
			padding: 0 .25em;
			border-radius: 2px;
			border: 1px solid rgba(128, 0, 128, .2)
		}
		.mult {
			font-weight: 700;
		}
	</style>
</head>
<body>
	<?php 
		$n = isset($_GET["numb"]) ? $_GET["numb"] : 1;
		echo "<h3>Calculando o valor fatorial de <span class='fatorial'>$n</span></h3>";
	?>
	<p>
		<?php 
			$r = 1;
			do {
				echo "$n <span class='mult'>X</span> ";
				$r *= $n;
				$n--;
			} while ($n >= 1);
			echo "0 = <span class='fatorial'>" .number_format($r,0,'.','.') ."</span> <em> resultado</em>.";
		?>
	</p>
	<p><a href="loops-5.html">Voltar</a></p>
</body>
</html>