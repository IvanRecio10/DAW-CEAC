<?php  

//Ejercicio 2.

	$array = array(10.5,2,3,4,'5','9',5,6, array(1,2,3,9));

	function valorMaximoNumero($num_array){
		$max =0;
		for ($i=0; $i < count($num_array) ; $i++) { 
			//$numActual=$num_array[$i];
			if ((is_int($num_array[$i]) || is_float($num_array[$i]) )&& $num_array[$i] > $max) {
				$max = $num_array[$i];
			}
		}
		return $max;
	}

	echo "El numero mas alto es: " . valorMaximoNumero($array);

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