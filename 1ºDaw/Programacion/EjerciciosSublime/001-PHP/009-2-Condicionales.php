<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Condicionales 2</title>
</head>
<body>

	<?php 

		$nota = 9;

		if ($nota < 5) {
			echo "Suspenso";
		}else if ($nota < 7) {
			echo "Bien";
		}else if ($nota < 9){
			echo "Notable";
		}else {
			echo "Sobresaliente";
		}
		
	?>



</body>
</html>