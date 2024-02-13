<?php
	
	$nombre = "Yolanda";
	
	//unset($nombre) = Funcion que destruye el valor de las variables que les pasemos como parametros de entrada.

	echo isset($nombre). "<br>";
	echo $nombre . "<br>";

	unset($nombre);

	echo empty($nombre);

?>