<?php  

	$numero = 6;

	function Factorial($num){
		$x = 1;
		for ($i=1; $i <= $num ; $i++) { 
			$x *= $i;
		}
		return $x;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 4</title>
</head>
<body>
	<p><?= "El resultado es: " . Factorial($numero) ?></p><br>
	<a href="index.php">Volver Ejercicios</a>
</body>
</html>