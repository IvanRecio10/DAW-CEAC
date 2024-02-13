<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
</head>
<body>
	<h1>Formulario</h1>
	<form name="form" action="procesar_formulario.php" method="get" enctype="application/x-www-form-urlencoded">
		<label>Calificación: </label>
		<input type="number" name="nota" min="0" max="10" step="0.25" required>
		<input type="submit" name="enviar" value="Enviar">
	</form>
	<?php 

		if(isset($_GET['resultado'])){
			$resultado =  $_GET['resultado'];
			echo $resultado;

		}


	?>
</body>
</html>

