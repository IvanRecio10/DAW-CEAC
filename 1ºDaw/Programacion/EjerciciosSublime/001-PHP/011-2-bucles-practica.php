<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practica</title>
</head>
<body>
	<h2>Concatenar valores de una array tradicional</h2>
	<?php 

		$telefonos = array("644 453 291", "699 214 365", "911 234 210");

		$telfString = "";
		foreach ($telefonos as $telefono) {
			$telfString .= $telefono . " / ";
		}

		echo rtrim($telfString, " / ") . "<br>";
	
		for ($i=0; $i < count($telefonos) ; $i++) { 
			$telfString .= $telefonos[$i] . " / ";
		}

		echo rtrim($telfString, " / ");

	?>


</body>
</html>