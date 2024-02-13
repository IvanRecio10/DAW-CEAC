<?php 
	
	if(!isset($_GET["nombreFoto"]) {
		header("location: index.php");
	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Fotografia</title>
</head>
<body>
	<h2>Fotografia</h2>
	<img src="img/<?= $_GET["nombreFoto"]?>"width="280px">
	<br>
	<a href="index.php">Galeria de fotos</a>
</body>
</html>