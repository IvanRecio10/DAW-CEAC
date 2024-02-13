<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practica Superglobales</title>
</head>
<body>
		<h2>Practica entregable Superglobales Ivan Recio Heras</h2>

		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
			<input type="text" name="nameUser1" placeholder="Nombre 1"><br>
			<input type="text" name="nameUser2" placeholder="Nombre 2"><br>
			<input type="text" name="nameUser3" placeholder="Nombre 3"><br>
			<input type="submit" value="Probar GET"><br>
		</form>

		<?php 
			
			echo "El ganador es: " . $_GET[array_rand($_GET)]; 
		
		?>

		<form action="ivan_recio_practicaSuperglobales_2.php" method="get">
			<input type="text" name="nameUser1" placeholder="Nombre 1"><br>
			<input type="text" name="nameUser2" placeholder="Nombre 2"><br>
			<input type="text" name="nameUser3" placeholder="Nombre 3"><br>
			<input type="submit" value="Probar POST"><br>
		</form>
</body>
</html>