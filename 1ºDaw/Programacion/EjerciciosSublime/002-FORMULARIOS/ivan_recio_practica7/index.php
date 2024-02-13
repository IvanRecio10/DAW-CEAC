<?php 
	extract($_GET);
	$comando = "";
	if (empty($codigo)){
		$codigo = "";
	}else{
		switch ($codigo) {
			case 0:
				$comando = "Todo se ha guardado correctamente";
				break;
			case 1:
				$comando = "Ha habido un error al guardar la imagen";
				break;
			case 2:
				$comando = "La foto no se puede guardar debido a su tipo de imagen o a su peso";
				break;
			case 3:
				$comando = "Has borrado todos los archivos de la carpeta";
				break;
			case 4:
				$comando = "Has borrado todos los archivos de dentro del directorio";
				break;
			case 5:
				$comando = "Ha habido un error en la creaccion de la carpeta";
				break;
			case 6: 
				$comando = "No has escrito un nombre para la carpeta";
				break;
		}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 7</title>
</head>
<body>
	<form action="comprobaciones.php" method="post" enctype="multipart/form-data">
		<input type="text" name="nom_carpeta" placeholder="Introduce el nombre de la carpeta">
		<br>
		<input type="file" name="img1">
		<br> 
		<input type="file" name="img2">
		<br>
		<small>Maximo 70kb</small>
		<br>
		<input type="submit" name="guardar" value= "Guardar">
		<input type="submit" name="borrar" value = "Borrar">
	</form>

	<br>
	<p><?= $comando ?></p>
</body>
</html>