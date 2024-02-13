<?php 
	extract($_POST);
	//Funcion urlencode() = codifica como URL una cadena, es decir, codfica carcteres extraños de textp para que puedan ser enviados por la URL. Es un metodo practico para pasar variables a la siguiente pagina.

	$bgFondo = urlencode($bgFondo);
	$colorTexto = urlencode($colorTexto);
	$mensaje = urlencode($mensaje);

	header("location: bienvenido.php?nombre=$nombre&mensaje=$mensaje&colorFondo=$bgFondo&colorTexto=$colorTexto");
	
?>