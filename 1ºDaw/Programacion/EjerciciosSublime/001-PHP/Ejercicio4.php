<?php

	$nombre = "Ivan";
	$edad = 18;
	$altura = 1.65;
	$hombre = true;

	//Funcion gettype => gettype($nombre) = funcion que nos devolvera el tipo de dato que almacena una variable, es decir, nos dira si es tipo String, Integer, double, boolean...

	print 'La variable $nombre es de tipo '. gettype($nombre) . "<br>";
	print 'La variable $edad es de tipo '. gettype($edad) . "<br>";
	print 'La variable $altura es de tipo '. gettype($altura) . "<br>";
	print 'La variable $hombre es de tipo '. gettype($hombre) . "<br>";
?>