<!--Cadenas-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejercicio 9</title>
</head>
<body>
	<?php

		//Funcion mb_internal_encoding("UTF-8") = modifica la variable del encoding para el resto de funcion mb_, sin tener que añadir en cada una de las funciones.

		mb_internal_encoding("UTF-8");
		
		//Funcion strlen($var_name)= devuelve el numero de caracteres que tiene un string.

		echo strlen("Hola Mundo"). "<br>";
		
		$texto = "Hola mundo";
		
		echo strlen($texto). "<br>";

		$length = strlen($texto);

		echo "$texto, tiene $length caracteres". "<br>";

	?>

	<h3>Longitud de cadena de textos con cadenas especiales</h3>

	<?php 

		//Funcion mb_strlen($var_name, "UTF-8")= devuelve el numero de caracteres incluyendo los caracteres especiales 

		echo mb_strlen("Hola Andrés", "UTF-8"). "<br>";

		$texto = "Hola Andrés";

		echo mb_strlen($texto, "UTF-8"). "<br>";

		$length = mb_strlen($texto, "UTF-8");

		echo $texto . " tiene " . $length . " caracteres.";

	?>

	<!---------------------------->

	<h3>Numero de palabras de una cadena</h3>

	<?php 

		//Funcion str_word_count($var_name) = devuelve el numero de palabras que componen una cadena de textos.

		echo str_word_count("Hola soy Ivan"). "<br>";
		$texto = "Hola soy Ivan";

		echo str_word_count($texto). "<br>";
		echo $texto . " tiene " . str_word_count($texto). " palabras." . "<br>";

		//Las comillas exteriores prevalecen sobre las interiores 
		$length = str_word_count($texto);
		echo "'$texto' tiene $length palabras" . "<br>";

		//str_word_count($var_name,0, caracteres especiales) pasamos mas parametros de entarda a la funcion si la cadena de textos a contabilizar contiene caracteres especiales. El valor 0, es porque queremos que nos devuelva el numero de palabras encontradas.

		$texto = "Los 10 mandamientos 2023";
		echo str_word_count($texto, 0, "0123456789") . "<br>";

	?>

	<!------------------------------------------>
	
	<h3>Convertir texto en mayusculas y en minusculas</h3>

	<?php 

		$texto = "HOLA MUY BUENOS DIAS";
		echo $texto . "<br>";
		$textomin = strtolower($texto);
		echo "El " . $texto . " escrito en minusculas es " . $textomin . "<br>";

		$texto2 = "hola muy buenos tardes";
		echo $texto2 . "<br>";
		$textomay = strtoupper($texto2);
		echo "El " . $texto2 . " escrito en minusculas es " . $textomay . "<br>";

	?>

	<!----------------------------------------------------->

	<h3>Convertir la primera letra de una frase en mayuscula</h3>

	<?php 

		//Funcion ucfirst($var_name) = devuelve la frase con la primera letra en mayuscula. No permite el encoding, es decir habra problemas con los caracteres especiales.

		echo ucfirst("me llamo Ivan") . "<br>";

		$texto = "soy el mejor";

		echo ucfirst($texto) . "<br>";

		$texto = "lA primerA lEtRa quE ApareZcA Tiene que ser MayuScUla";

		echo ucfirst(mb_strtolower($texto, "UTF-8")) . "<br>";

	?>

	<h3>Convertir la primera letra de cada palabra de una frase en mayuscula</h3>

	<?php 

		//Funcion ucwords($var_name) = devuelve la oracion con la primera letra de cada palabra en mayuscula, y tampoco permite el encoding.

		$texto = "hola muy buenas tardes tengo hambre";

		echo ucwords($texto) . "<br>";

		$texto = "Hola MuY bueNaS taRdeS";

		echo ucwords(mb_strtolower($texto, "UTF-8")). "<br>";

	?>

	<h3>Conversion en funcion de metodos</h3>

	<?php 
				
		//Funcion mb_convert_case($var_name, metodo, encoding) = segun el metodo que le especifiquemos a la funcion realizara una conversion u otra. Hay tres tipos diponibles (MB_CASE_UPPER, MB_CASE_LOWER, MB_CASE_TITLE).

		$texto = "tengo un arbol en mi jardin";
		$textomay = mb_convert_case($texto,MB_CASE_UPPER);

		echo $textomay . "<br>";

	?>

	<h3>Cortar string y concatenar funciones</h3>

	<?php 

		//Funcion mb_substr($var_name, star pos, lengh/cantidad, encoding) = devuleve una parte de la cadena.

		$texto = "arbol verde";
		$texto_a = mb_substr($texto,0,1);

		echo mb_substr($texto,0,1) . "<br>";

		echo mb_strtoupper($texto_a) . "<br>";

		$texto = "áRboL VerDe En mI jarDin";

		echo mb_strtoupper(mb_substr($texto,0,1)) . mb_strtolower(mb_substr($texto,1,strlen($texto))) . "<br>";

	?>

	<h3>Quitar espacios o caracteres al inicio o al final de una cadena</h3>

	<?php 

		//Funcion trim($var_name, caracter a eliminar)= elimina los caracteres buscados del principio y del final de la cadena.

		$correo = "@ivanrh1110@ceacfp.com@";

		echo trim($correo, "@") . "<br>";

		//Funcion rtrim($var_name, caracter a eliminar) = elimina los caracteres del final (rigth) de la cadena.

		echo rtrim($correo, "@") . "<br>";

		echo ltrim($correo, "@") . "<br>";

	?>

	<h3>Buscar y remplazar</h3>

	<?php 

		//Funcion str_replace (palabra a buscar, palabra remplazo, $var_name) = devuelve la acdena de texto modificada.

		$texto = "Hola buenas noches";

		echo $texto . "<br>";

		echo str_replace("noches","tardes",$texto) . "<br>";

	?>

	<h3>Devolver una subcadena</h3>

	<?php 

		//Funcion strchr($var_name, elemento a buscar desde la izquiera) = devuelve los caracteres en sentido de lectura, a partir del caracter buscado y encontrado desde la izquierda (este incluido).

		$fichero = "foto.gatito.bonito.jpg";

		echo strchr($fichero, ".") . "<br>";

	?>

	<h3>Convertir un string en un array a partir de un carcter</h3>

	<?php 

		

	?>
</body> 
</html>