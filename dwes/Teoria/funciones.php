<?php  

	function quitarTildes($texto){
		$textoSinTildes = str_replace(["á","Á", "é", "É", "í", "Í", "ó", "Ó", "ú", "Ú"], ["a","A", "e", "E", "i", "I", "o", "O", "u", "U"], $texto);
		return $textoSinTildes;
	}

	$texto = "En la última habitación hay un videojuego épico. No está vacía";

	$textoNuevo = quitarTildes($texto);

	echo $textoNuevo . "<br>";

	include("funciones_include.php");

	numerosPrimos();
	
?>