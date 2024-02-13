<?php 

	include("001-Funciones.php");	
	//Vamos a recoger los datos que le pasemos a traves del formulario.
	//Primero comprobamos que haya enviado datos.
	if (isset($_GET)){
		$cantidad = $_GET['cantidad'];
		$limA = $_GET['limA'];
		$limB = $_GET['limB'];
		if(validarDatos($cantidad, $limA, $limB)){
			//Llamamos a la función con los datos que el hemos pasado a traves del formulario.
			$arrayNums = generadorNum($cantidad, $limA, $limB);
		}else{
			header("location:001.php");
		}

	}

	sort($arrayNums);

	$nums = serialize($arrayNums);

	header("location:001.php?nums=$nums");

?>