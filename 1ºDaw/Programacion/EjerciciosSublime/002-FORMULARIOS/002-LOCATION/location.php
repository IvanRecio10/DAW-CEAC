<?php 

	extract($_POST);

	/*Funcion header() => Enviar encabezado sin formato HTTP Redirecciona*/
	//Importante: deben ser llamados antes de mostrar nada por pantalla, ni espacios al principio ni al final del documento, ademas no puede ir entre etiquetas de HTML.

	if($email == "ivanrh1110@gmail.com" && $contraseña == "1234"){
		header("location: bienvenido.php?correo=$email");
	}else if ($email == "ivanrh1110@gmail.com" && $contraseña != "1234"){
		header("location: index.php?error=1");
	}else{
		header("location: index.php?error=2");
	}

?>