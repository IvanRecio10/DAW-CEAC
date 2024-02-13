<?php 

	$fotos = array("messi.jpg" , "cristiano.jpg", "luka.jpg");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Galeria de fotos</h2>

	<?php for($i = 0; $i < count($fotos); $i++){ ?>
		<a href="watch.php?nombreFoto=<?= $fotos[$i]?>" width= "280px">
			<img src="img/<?= $fotos[$i]?>" width= "240px">
		</a>
	<?php } ?>
</body>
</html>