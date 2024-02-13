<?php 

	if ($_GET) {
		switch ($_GET['c']) {
			case 0: 
				$c = "El fichero no cumple los requisitos";
				break;
			case 1: 
				$c = "El fichero ya existe";
				break;
			case 2:
				$c = "El fichero se ha subido correctamente";
				break;
			case 3:
				$c = "Error en la subida del archivo";
				break;
		}
	}
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Subida de imagenes</h2>

	<form action="upload.php" method="post" enctype="multipart/form-data">
		<label>Selecciona una foto:</label>
		<br>
		<input type="file" name="archivo">
		<br><small>Maximo 70kb</small>
		<br>
		<br>
		<input type="submit" name="Guardar">
	</form>
	<br>
	<p><?= $c ?></p>
</body>
</html>