<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Crear paginas personalizadas</h2>

	<form action = "validar.php" method="post">
		Nombre
		<br>
		<input type="text" name="nombre" required>
		<br>
		Mensaje
		<br>
		<textarea name= "mensaje"></textarea>
		<br>
		Color de fondo <input type="color" name="bgFondo" value ="#000000">
		Color de texto <input type="color" name="colorTexto" value = "#ffffff">
		<br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>