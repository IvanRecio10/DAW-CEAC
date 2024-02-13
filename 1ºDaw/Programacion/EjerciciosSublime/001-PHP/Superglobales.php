<?php 

	//Variables superglobales = son aquelllas variables disponibles en todos los ambitos a lo largo del Script.

	//$_GET = ES UN ARRAY ASOCIATIVO QUE RECOGE LOS VALORES PROCEDENTES DE UN FORMULARIO ENVIADO POR EL METODO GET
	//$_POST = ES UN ARRAY ASOCIATIVO QUE RECOGE LOS VALORES PROCEDENTES DE UN FORMULARIO ENVIADO POR EL METODO POST
	//$_REQUEST = ES UN ARRAY ASOCIATIVO QUE RECOGE LOS VALORES PROCEDENTES DE UN FORMULARIO ENVIADO POR EL METODO REQUEST

	//Estos arrays asociativos asocian valores procedentes del formulario con las claves que corresponden a los name de los input.
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Super Globales</title>
</head>
<body>
	<h2>Formulario ejecutado en fichero externo con metodo GET</h2>

		<form action="008-1-superglobales.php">
			<input type="text" name="nameUser" placeholder="Inserta tu nombre"><br>
			<input type="text" name="LastNameUser" placeholder="Inserta tu apellido"><br>
			<input type="email" name="email" placeholder="Inserta tu email"><br>
			<input type="submit" value="Probar GET"><br>

		</form>

	<!--------------------------------->
	<h2>Formulario ejecutado en fichero externo con metodo REQUEST</h2>

		<form action="008-02-superglobales.php" method="get">
			<input type="text" name="nameUser" placeholder="Inserta tu nombre"><br>
			<input type="text" name="LastNameUser" placeholder="Inserta tu apellido"><br>
			<input type="email" name="email" placeholder="Inserta tu email"><br>
			<input type="submit" value="Probar REQUEST"><br>

		</form>

	<!-------------------------------------->

	<h2>Formulario ejecutado en el mismo documento con metodo GET</h2>

		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
			<input type="text" name="nameUser" placeholder="Inserta tu nombre"><br>
			<input type="text" name="LastNameUser" placeholder="Inserta tu apellido"><br>
			<input type="email" name="email" placeholder="Inserta tu email"><br>
			<input type="submit" value="Probar REQUEST"><br>
		</form>

		<?php 

			echo "Bienvenid@ " . $_GET["nameUser"] . " " . $_GET["LastNameUser"] . " tu correo electronico es " . $_GET["email"];
		
		?>

	<!--------------------------------->

	<h2>Formulario ejecutado con el metodo post</h2>

		<form action="008-02-superglobales.php" method="post">
			<input type="text" name="nameUser" placeholder="Inserta tu nombre"><br>
			<input type="text" name="LastNameUser" placeholder="Inserta tu apellido"><br>
			<input type="email" name="email" placeholder="Inserta tu email"><br>
			<input type="submit" value="Probar POST"><br>

		</form>

	<!-------------------------------------->

	<h2>Formulario ejecutado en el mismo documento con metodo POST</h2>

		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<input type="text" name="nameUser" placeholder="Inserta tu nombre"><br>
			<input type="text" name="LastNameUser" placeholder="Inserta tu apellido"><br>
			<input type="email" name="email" placeholder="Inserta tu email"><br>
			<input type="submit" value="Probar POST"><br>
		</form>

		<?php 

			echo "Bienvenid@ " . $_POST["nameUser"] . " " . $_POST["LastNameUser"] . " tu correo electronico es " . $_POST["email"];
		
		?>


</body>
</html>v