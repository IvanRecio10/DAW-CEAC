<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

	<h2>Arrays asociativos</h2>

	<?php 

		//Array asociativo = asocia valores con claves.
		//Sintaxis : $var = array("clave" => "valor", "clave" ...)

		$capitales = array("España" => "Madrid","Francia" => "Paris");
		echo "La capital de España es " . $capitales["España"] . "<br>";
		echo "La capital de Francia es " . $capitales["Francia"] . "<br>";

	?>

	<h2>Array traicional</h2>

	<?php 

		//Array tradicional = asocia valores con indices o posiciones 
		//Sintaxis: $ var = array ("valor1", "valor2"...)

		$capitales = array ("Madrid", "Paris", "Londres");

		echo "La capital de España es " . $capitales[0] . "<br>";
		echo "La capital de Francia es " . $capitales[1] . "<br>";
		echo "La capital de gran Bretraña es " . $capitales[2] . "<br>";

	?>

	<h2>Pintar por pantalla el contenido de un array</h2>
	<?php 

		//No podemos pintar el contenido de un array con echo $capitales;
		//Funcion var_dump($var_array) = imprime por pantalla el contenido del array, devolviendo informacion sobre el numero de elementos que contiene, tipo de datos, longitud de caracteres de cada uno de los valores y la sintaxis "clave" ==> "valor"

		var_dump($capitales) . "<br>";

		//Funcion print_r($var_array) = imprime por pantalla el contenido del array, devolviendo unicamente la sintaxis.

		print_r($capitales);

		$usuarios = array("Marco", "Iván", "Maria");

		echo 'Los $usuarios de mi plataforma son '


	?>

</body>
</html>