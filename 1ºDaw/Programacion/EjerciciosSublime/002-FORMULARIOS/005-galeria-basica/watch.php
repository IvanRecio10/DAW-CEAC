<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FOTOS</title>
</head>
<body>
	<h2><?= $_GET["titulo"] ?></h2>
	<img src="img/<?= $_GET["nombreFoto"]?>" width = "280px">
	<br>
	<a href="index.php">Galeria de Fotos</a>
</body>
</html>