<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Matrizes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<?php 
		$v = array(17,9,5,14,6,10);
		echo "<p>Meu vetor tem <mark>".count($v)."</mark> elementos.</p>";
		
		// add item array no final
		array_push($v, 99);

		// eliminar o último item
		array_pop($v);
		
		// add item no inicio
		array_unshift($v, 7);

		// eliminar item do inicio
		array_shift($v);

		// colocar os valores do vetor em ordem
		sort($v);

		// invertendo o sort
		rsort($v); // r=reverse

		// colocando os keys em orderm
			// neste exemplo não surtiu efeito
		ksort($v);
		/*
			$x = array(2=>"A", 6=>"B", 4=>"C");
			ksort($v) = [2]="A", [4]="C", [6]="B";
		*/
	?>	
	<pre>
		<?php 
			print_r($v);
		?>
	</pre>
</body>
</html>