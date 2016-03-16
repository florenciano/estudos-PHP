<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<pre>
	<?php 
		$n = array(3,5,8,2);
		// add itens no array
		print_r($n);
		
		$n[] = 7;
		print_r($n);

		$r = range(10,50,3); // 1 [init]| 2[finished] | 3 [steps]
		print_r($r);

		/*
			Geralmente o uso de print_r é apenas em testes.
			Para visualizar o conteúdo dos arrays, uma alternativa
			é o forEach
		*/
		forEach($r as $v) {
			echo "<mark>$v</mark> ";
		}

		// chaves personalizadas
		$v2 = array( 0 => 5, 1 => 12, 4 => 9, 28 => 66);
		$v2[] = "E";
		print_r($v2);
		unset($v2[29]); // deletar este indice
		print_r($v2);

		// chaves associativas
		$v3 = array("nome" => "Rodrigo", "idade" => 35, "peso" => 73.5);
		var_export($v3);
		$v3["chess"] = true;
		var_dump($v3["chess"]);

		forEach($v3 as $k => $c) { // key e content
			echo "<p>O valor do campo é <mark>$k</mark> e seu valor é <mark>$c</mark></p>";
		}
	?>	
	</pre>
	
</body>
</html>