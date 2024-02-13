<?php  

//Ejercicio 1.

	$num_array = array(0, 1, 2, 4 ,56, 78 ,88, 91);
	function valorMaximo($numero){
		$max = 0;
		for ($i=0; $i < count($numero) ; $i++) { 
			if ($numero[$i] > $max) {
				$max = $numero[$i];
			}
		}
		return $max;
	}

	echo "El numero mas alto es: " . valorMaximo($num_array);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<br>
	<a href="index.php">Volver ejercicios</a>
</body>
</html>