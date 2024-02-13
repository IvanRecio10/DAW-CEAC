<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="pedido.php" method="post">
		<input type="text" name="nombre" placeholder="Nombre" required>
		<input type="text" name="direccion" placeholder="Direccion" required>
		<input type="checkbox" name="productos[]" value="Patata">Patata
		<input type="checkbox" name="productos[]" value="Judias">Judias
		<input type="checkbox" name="productos[]" value="Chorizo">Chorizo
		<input type="checkbox" name="productos[]" value="Queso">Queso
		<input type="checkbox" name="productos[]" value="Manzanas">Manzanas
		<input type="checkbox" name="productos[]" value="Lomo">Lomo
		<input type="checkbox" name="productos[]" value="Aguacates">Aguacates
		<br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>