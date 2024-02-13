<?php 
 
	extract($_GET);
	$titulo = "";

	if ($nombreFoto == "imagen1.jpg"){
		$titulo = "El hombre del lago";
	} else if ($nombreFoto == "imagen2.jpg"){
		$titulo = "Fiordo Noruego";
	}else if ($nombreFoto == "imagen3.jpg"){
		$titulo = "Lago en la montaña";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fotos</title>
	<style>
		body{
			background-color: skyblue;
		}
	</style>
</head>
<body>
	<center>
		<!--Insertamos la imagen que ateriormente hemos seleccionado en el index y la ponemos a un tamaño mas grande-->
		<h2><?= $titulo ?></h2>
		<?php if ($nombreFoto == "imagen1.jpg") { ?>
			<img src="imagen/imagen1.jpg" width="700px">
		<?php }else if ($nombreFoto == "imagen2.jpg"){ ?>
			<img src="imagen/imagen2.jpg" width="700px">
		<?php } else { ?>
			<img src="imagen/imagen3.jpg" width="700px">
		<?php } ?>
		<br>

		<?php 
		$fotos = array("imagen1.jpg", "imagen2.jpg", "imagen3.jpg");
		$pos = array_search($_GET['nombreFoto'], $fotos);
			if ($pos != 2) {
		?>
				<a href="watch.php?nombreFoto=<?=$fotos[$pos+1]?>">Siguiente</a>
		<?php
			}else {
		?>
				<a href="watch.php?nombreFoto=<?=$fotos[0]?>">Siguiente</a>
		<?php 
			}  
		?>
				<a href="index.php">Galeria</a>
		<?php 
			if ($pos != 0) {
		?>
				<a href="watch.php?nombreFoto=<?=$fotos[$pos-1]?>">Anterior</a>
		<?php
			}else {
	 	?>
				<a href="watch.php?nombreFoto=<?=$fotos[2]?>">Anterior</a>
		<?php 
			}
		?>

	</center>
</body>
</html>