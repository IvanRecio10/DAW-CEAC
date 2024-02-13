<?php  

	$a = array(1, 2, "a", array(1,2,3,4), 5, 6);
	$b = array(1, "2", "a", 3);

	for ($i=0; $i < count($a); $i++) { 
		for ($j=0; $j < count($b); $j++) { 
			if ($i == $j){
				if($a[$i] === $b[$j]){
					echo "los valores de la posicion [$i] son identicos en valor y tipo <br>";
				}else if ($a[$i] == $b[$j]){
					echo "los valores de la posicion [$i] son identicos en valor pero no en tipo <br>";					
				}else{
					echo "los valores de la posicion [$i] no son iguales <br>";
				}
			}else{
				continue;
			}
		}
	}

	echo "Ya no tengo mas elementos a comparar en el array B <br>";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 6</title>
</head>
<body>
	<br>
	<a href="index.php">Volver Ejercicios</a>
</body>
</html>