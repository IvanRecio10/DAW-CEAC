<?php 

	$nombre = "Ivan";
	$edad = 18;
	$altura = 1.65;
	$hombre = true;

	//La funcion isset($nombre) = funcion que devuleve True(1) si la variable esta definida, es decir, si contiene un valor. si la variable no esta definida devolvera un False(0).

	echo '¿La variable $nombre esta definida? ' . isset($nombre) . "<br>";

	//Isset($a, $b, $c) permite varios parametros de entrada, para que devuelva True(1), todos ellos deben estar iniciados, si uno de ellos no lo esta nos devolvera false.

	echo '¿Las variables nombre y edad estan definidas? '. isset($nombre, $edad) . "<br>";
	echo '¿Las variables nombre y peso estan definidas? '. isset($nombre, $peso) . "<br>";

?>