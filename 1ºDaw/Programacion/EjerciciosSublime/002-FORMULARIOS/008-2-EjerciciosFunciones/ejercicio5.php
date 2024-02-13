<?php  

	$array = array(1, "2", 3, array(4, 5, 6, 7), 8);

	function emular($param1){
		for ($i=0; $i < count($param1); $i++) { 
			if(is_array($param1[$i])){
				echo "[$i] => <br>";
				for ($j=0; $j < count($param1[$i]); $j++) { 
					echo " ..[$j] => " . $param1[$i][$j] . "<br>";
				}
			}else{
				echo "[$i] => $param1[$i] <br>";
			}
		}
	}

	emular($array);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 5</title>
</head>
<body>
	<a href="index.php">Volver ejercicios</a>
</body>
</html>