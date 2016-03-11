<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loops</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<p>
	<?php 
		for($a = 1; $a <= 10; $a++) {
			echo "<span>$a </span>";
		}
	?>	
	</p>
	<p>
		<?php 
			for ($i = 120; $i >= 0; $i -= 5) { 
				echo "<span>$i </span>";
			}
		 ?>
	</p>
</body>
</html>