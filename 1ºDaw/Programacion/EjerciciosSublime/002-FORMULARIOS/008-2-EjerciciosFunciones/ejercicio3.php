<?php 
 	
	function calculo(){
		extract($_POST);
		if (isset($_POST)){
			foreach ($funcion as $funcion_actual) {
				switch ($funcion_actual) {
					case "sumar":
						$solucion = $num1 + $num2;
						break;
					case "restar":
						$solucion = $num1 - $num2;
						break;
					case "multiplicar":
						$solucion = $num1 * $num2;
						break;
					case "dividir":
						$solucion = $num1 / $num2;
						break;
				}
			}
		}
		return $solucion;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 3</title>
</head>
<body>
	<form action="<?php $_SERVER["PHP_SELF"]?>" method="post">
		Introduce el primer numero<input type="number" name="num1"><br>
		Introduce el segundo numero<input type="number" name="num2"><br>
		<select name="funcion[]">
			<option value="sumar">+</option>
			<option value="restar">-</option>
			<option value="multiplicar">*</option>
			<option value="dividir">/</option>
		</select>
		<br>
		<input type="submit" name="calcular" value="Calcular">
	</form>

	<p><?= calculo() ?></p>

	<br>
	<a href="index.php">Volver Ejercicios</a>
</body>
</html>
