<?php 

//$variable = contenedor que almacena datos de tipo integer, string, double, boolean...

	$nombre = "Ivan";
	$edad = 18;
	$altura = 1.65;
	$hombre = true;

	//Las variables introducidas entre comillas simples se interpretan de manera literal, mientras que con comillas dobles o sin ellas muestran el valor de la variable.
	echo "<p>$nombre</p>";
	echo $edad . "<br>";

	//Concatenar.

	echo 'La variable $nombre'. ' vale ' . $nombre. "<br>";
	echo $nombre . ' tiene ' . $edad . ' años' . "<br>";

?>