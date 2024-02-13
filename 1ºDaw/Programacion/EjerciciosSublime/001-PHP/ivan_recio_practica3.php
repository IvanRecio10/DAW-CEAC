<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practica 3</title>
</head>
<body>

	<h2>Ivan Recio Heras Practica 3</h2>

	<?php 

		$tipo_comida = "verdura";
		$animal = false;
		$tipos = array("carnívoro", "vegetariano", "omnívoro", "vegano");

		if ($tipo_comida == "carne") {
			echo $tipos[0];
		}else if ($tipo_comida == "verdura" && $animal){
			echo $tipos[1];
		}else if ($tipo_comida == "verdura" && !$animal) {
			echo $tipos[3];
		}

	?>

</body>
</html>