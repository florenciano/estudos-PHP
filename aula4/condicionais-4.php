<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Condições em PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<?php
		$uf = isset($_GET["uf"]) ? $_GET["uf"] : "Selecione estado";

		switch ($uf) {
			// regiao sul
			case 'PR':
			case 'RS':
			case 'SC':
				$r = "Região sul";
				break;
			// região sudeste
			case 'ES':
			case 'MG':
			case 'RJ':
			case 'SP':
				$r = "Região sudeste";
				break;
			// região nordeste
			case 'AL':
			case 'BA':
			case 'CE':
			case 'MA':
			case 'PB':
			case 'PE':
			case 'PI':
			case 'RN':
			case 'SE':
				$r = "Região nordeste";
				break;
			// região norte
			case 'AC':
			case 'AM':
			case 'AP':
			case 'PA':
			case 'RO':
			case 'RR':
			case 'TO':
				$r = "Região norte";
				break;
			// região centro-oeste
			case 'DF':
			case 'GO':
			case 'MS':
			case 'MT':
				$r = "Região centro-oeste";
				break;

			default:
				$r = "Nenhuma região do Brasil foi mencionado";
		}
		echo "<p> O estado do Brasil seleiconado foi <strong>$uf</strong> que pertence à <strong>$r</strong>.</p>";
	?>
	<p><a href="condicionais-4.html">Voltar</a></p>
</body>
</html>