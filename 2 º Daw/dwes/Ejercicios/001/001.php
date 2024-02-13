<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 001</title>
</head>
<body>
	<form method="get" action="001-Procesador.php" enctype="application/x-www-form-urlencoded">
		<label>Cantidad</label>
		<input type="number" name="cantidad" min="1" max="100" required><br>
		<label>Limite A</label>
		<input type="number" name="limA" min="1" max="100" required><br>
		<label>Limite B</label>
		<input type="number" name="limB" min="1" max="100" required><br>
		<input type="submit" value="Enviar">
	</form>
</body>
</html>

<?php  

	if (isset($_GET['nums'])) {
	
		$nums = unserialize($_GET['nums']);

		foreach ($nums as $num) {
			echo "$num ";
		}
	}


?>