<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Conversor de monedas</title>
</head>
<body>
	<h2>Conversor de monedas</h2>
	<form action="conversor.php" method="get">
		
		Cantidad<input type="number" name="cantidad" placeholder="Introduce la cantidad" required>
		<br>
		<br>
		<select name="origen">
			<option value="0">€</option>
			<option value="1">$</option>
			<option value="2">£</option>
		</select>
		<br>
		<br>
		<select name="destino">
			<option value="0">€</option>
			<option value="1">$</option>
			<option value="2">£</option>
		</select>
		<br>
		<br>
		<input type="submit" name="Enviar">
	</form>
</body>
</html>