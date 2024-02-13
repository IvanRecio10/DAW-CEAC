<?php 

	mb_internal_encoding("UTF-8");

	//Ejercicio 1.

		$mensaje = "Hoy es lunes";

		echo gettype($mensaje) . "<br>";

	//Ejercicio 2.

		unset($mensaje);

	//Ejercicio 3.

		echo empty($mensaje) . "<br>";

	//Ejercicio 4.

		$palabra = "No CuenTes LoS Días, Haz qUe los DÍas cuEnTeN";

		echo mb_strtolower(mb_substr($palabra,11,17)) . "<br>";

	//Ejercicio 5.

		echo str_ireplace("días","Meses", ucwords(mb_strtolower($palabra))) . "<br>";

	//Ejercicio 6.

		echo str_word_count($palabra, 0, "íÍ") . "<br>";
?>