<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action = "bienvenida.php" method="post">
		<input type="text" name="nombre" placeholder="Introduce tu nombre" required>
		<input type="text" name="apellido" placeholder="Introduce tu apellido" required>
		<input type="radio" name="sexo" value="F">F
		<input type="radio" name="sexo" value="M">M

		<input type="submit" value="Entrar">
	</form>
</body>
</html>