<?php  

	$texto = "Me gustan las verduras";

	echo $texto . "<br>";
	echo str_replace("verduras", "hamburguesas", $texto). "<br>";

	$texto = "Hola soy un camión que va muy rapído";
	$textoSinTildes = str_replace(["á","Á", "é", "É", "í", "Í", "ó", "Ó", "ú", "Ú"], ["a","A", "e", "E", "i", "I", "o", "O", "u", "U"], $texto);
	$textoSinTildes2 = str_ireplace(["á","é","í","ó","ú",], ["a","e","i","o","u",], $texto);

	echo $textoSinTildes;
	echo "<p>$textoSinTildes2</p>"

?>          