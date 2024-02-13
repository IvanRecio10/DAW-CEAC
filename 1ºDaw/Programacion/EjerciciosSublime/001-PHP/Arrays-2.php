<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays-2</title>
</head>
<body>

	<h2>Numero de elmentos que hay en un array</h2>
	
	<?php 

		//Funcion count($var_array) = devuelve el numero de elemenros que hay en un array
		//Array asociativo

		$usuarios = array("u1" => "Yolanda", "u2" => "Andres", "u3" => "Jose David");
		$users = array("Yolanda", "Andres", "Jose David");

		echo 'El array $usuarios tiene ' . count($usuarios) . " valores <br>";
		echo 'El array $users tiene ' . count($users) . " valores <br>";

	?>

	<h2>Crear un array a partir de un String</h2>

	<?php 

		//funcion explode(caracter e division, $string) = devuelve el caracter resultante de dividir la cadena de texto a partir del caracter buscado, es decir, divide una cadena de texto y crea un arrray con estos sub-textos.

		$string = "yolanda@ceacfp.com,andres@ceacfp.com,josedavid@ceacfp.com";

		$emails = explode(",", $string);

		var_dump($emails);
		echo "<br>";
		echo $emails[1] . "<br>";

		//El email josedavid@ceacfp.com tiene 20 caracteres
		
		echo "El email " . $emails[2] . " tiene " . strlen($emails[2]) . " caracteres <br>";

	?>

	<h2>Obtener el ultimo elemento de un array</h2>
	<h3>Opcion con funcion end()</h3>

	<?php 

		//Funcion end($var_name) = devuelve el ultimo elemento de un array.

		$fichero = "ceac.fondo-escenario.png";
		
		$fichero_array = explode(".", $fichero);

		echo end($fichero_array) . "<br>";

	?>

	<h3>Opcion con funcion</h3>

	<?php 

		$fichero = "ceac.fondo-escenario.png";

		$fichero_array = explode(".", $fichero);

		echo $fichero_array[0] . "<br>";

		$fichero = "gatito.bonito.jpg";

		$fichero_array = explode(".",$fichero);

		echo $fichero_array[count($fichero_array) -1] . "<br>";

	?>

	<h2>Crear un String a partir de un array</h2>

	<?php 

		//Funcion implode(caracter de division, $var_array) = devuelve una cadena de texto a partir de los elementos de un array, separandolos por el caracter de division.

		$emails = array("yolanda@ceacfp.com", "andres@ceacfp.com", "josedavid@ceacfp.com");

		$string = implode(", ", $emails);

		echo $string . "<br>";

		echo str_replace(",", " y", $string);

	?>

	<h2>Crear variables a partir de un array asociativo</h2>

	<?php 
		//Funcion extract($var_array) = crea variables a partir de las claves de un array asociativo.

		$usuarios = array("nombre" => "Yolanda", "email" => "yolanda@ceacfp.com", "dni" => "48147921C", "edad" => 30);

		extract($usuarios);

		echo $nombre . " tiene el email " . $email . " y su edad es " . $edad . "<br>";

		$obj = array("color" => "azul", "tamanio" => "medio", "forma" => "esferica");

		extract($obj);

		echo 'El $color de mi objeto es ' . $color . 'y su $forma es ' . $forma . "<br>";

	?>

	<h2>Devolver el aleatorio de una funcion</h2>

	<?php 

		//Funcion array_rand($var_name) = devuelve un numero de una posicion aleatoria de dentro del array.
		$nombres = array("Yolanda", "Andres", "Jose David");

		$num_pos = array_rand($nombres);

		echo $nombres[$num_pos];

		//La funcion array_rand admite dos parametros el variable y el numero de posiciones a extraer => array_rand($var_array, Nº)

		$num_pos = array_rand($nombres, 2);

		echo $nombres[$num_pos[0]]

	?>
</body>
</html>