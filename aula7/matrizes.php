<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Matrizes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<pre>
		<?php 
			// criando a matriz
			$m =
				array(
					array(3,76,98),
					array(45,78,56),
					array(9,40,65),
					array(89,2,53,71)
				);

			print_r($m);

			// 40	   // 53
			$m[2][1] = $m[3][2];
			var_dump($m[3]);
		?>	
	</pre>
</body>
</html>