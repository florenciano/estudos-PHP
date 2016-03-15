<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Funções em PHP - include</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<?php 
		// fn String
		
		// 1] printf : mostre na tela semelhante ao echo. Uma herança da linguagem C
		$preco = "queijo";
		$resp = 1004.65;
		echo "<p>O preço do $preco custa R$ <mark>".number_format($resp,2,",",".")."</mark></p>";
		
		// $s = string = $preco | %.2f = inteiro com duas decimais = $resp | %d = decimal | $u = inteiros sem sinais de negativo ou positivo
		printf("<p>O %s custa R$ <mark>%.2f</mark></p>", $preco, $resp);

		// 2] print_r : mostre valoes de vetores [Array]
		$vetor = [9,8,3,5];
		// print_r($vetor);

		$vetor2 = array([1,2],"Rodrigo",3,32.45,true);
		// print_r($vetor2);
		var_dump($vetor2); // mostra o vetor e suas tipagens
		echo "<p></p>";
		// var_export($vetor2); // semelhante ao print_r

		// 3] wordwrap() : quebra de texto
		$stringGigante = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio sequi, commodi quam debitis, pariatur ipsam nobis!";
		$respStringGigante = wordwrap($stringGigante, 12, "<br>");
		echo("<p>".$respStringGigante."</p>");

		// 4] strlen : comprimento
		$sstring = "Rodrigo Florenciano";
		$nnumer = 36.2;
		$bboolean = false;
		echo "<p>".strlen($sstring)." ".strlen($nnumer)." ".strlen($bboolean)."</p>";

		// 5] trim : elminar espaços em brancos entre sentenças de uma string
		$nome = "     Rodrigo Florenciano    dady  oh      ";
		echo("<p>".strlen($nome)."</p>");
		echo("<p>".trim($nome)."</p>");	

		// 6] ltrim	ou rtrim : fácil entender
		echo("<p>".ltrim($nome)."</p>");
		echo("<p>".rtrim($nome)."</p>");

		// 7] str_word_count : conta qtde palavras string
		$outraString = "Lorem ipsum dolor sit.";
		$y = str_word_count($outraString, 2); // 2 parametres: 0[default], 1, 2
		print_r($y);

		// 8] explode : quebra a string e cria um vetor
		$eexplode = explode(" ", "Lorem ipsum dolor sit"); // procure por um espaco em branco e crie um vetor
		echo "<p></p>";
		print_r($eexplode);

		// 9] str_split : coloca cada letra de uma string em uma posicao do vetor
		$sstringSplit = str_split("Lorem ipsum dolor sit amet, consectetur.");
		echo "<p></p>";
		print_r($sstringSplit);

		// 10] implode | join: converte um vetor em uma string
		$vv = implode(" ",["Rodrigo", 35, "Florenciano",true]); // utiliza o 1º parametro para concatenar na string
		echo "<p>$vv</p>";

		// 11] chr : caractere baseado no codido ASCII
		$codigo = chr(57);
		echo "<p>O caractere do código ASCII solicitado é <mark>$codigo</mark></p>";

		// 12] ord : inverso do chr
		$caractere = ord(" ");
		echo "<p>O código do código ASCII solicitado é <mark>$caractere</mark></p>";

	?>
</body>
</html>