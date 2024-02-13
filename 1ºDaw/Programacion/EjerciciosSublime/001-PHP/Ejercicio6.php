<?php

	$nombre = "Yolanda";
	$edad = 30;
	$altura = 1.65;
	$mujer = true;

	//La funcion empty($nombre) = funcion que nos devuelve True(1) si la variable no tiene nada y nos devolvera False(0) se la variable SI tiene valor.

	echo '¿La variable $nombre esta vacia? '. empty($nombre). "<br>";
	echo '¿la variable $peso esta vacia? ' . empty($peso) . "<br>";

	//Empty($a, $b, $c) no esta permitido, ya que no puedo pasar mas de un parametro.

?>