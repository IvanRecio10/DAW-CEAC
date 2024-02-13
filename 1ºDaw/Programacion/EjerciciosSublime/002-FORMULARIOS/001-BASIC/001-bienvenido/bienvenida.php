<?php 

		extract($_POST);
		if ($sexo == "F"){
			$mng = "Bienvenida";
		}else{
			$mng = "Bienvenido";
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
	<h2>Saludo: </h2>
	<p> <?php echo $mng . " " . $nombre . " " . $apellido ?></p>
</body>
</html>