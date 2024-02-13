<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Condicionales</title>
</head>
<body>
	<h2>Comdicionales if/else (Operadores de comparacion)</h2>

	<?php 

		$tope = 8;
		$precio_copa_bar = 10;

		if ($precio_copa_bar <= $tope) {
			echo "Ponme una copa";
		}else {
			echo "No gracias " . $precio_copa_bar . "€ es un timo.";
		}

	?>

	<br>

	<h2>Condicionales if/else (operadores logicos)</h2>

	<?php 

		$num = rand(0,10); //Numero aleatorio del 0 al 10.

		if($num == 2 || $num ==5){
			echo "Tu numero es " . $num . " Has ganado";
		}else{
			echo "Tu numero es " . $num . " Sigue intentandolo";
		}

	?>

	<br>

	<h2>Condicionales if/else (Operadores de igualdad)</h2>

	<?php 

		$a = 1;
		$b = "1";

		if ($a == $b) {
			echo "Son iguales";
		} else {
			echo "No son iguales";
		}
		
	?>

	<br>

	<h2>Condicionales if/else (Variables booleanas)</h2>

	<?php 

		$mujer = true;

		if ($mujer) {
			echo " Bienvenida";
		} else {
			echo "Bienvenido";
		}
		
		echo "<br>";

		$edad = 25;
		$zapatillas = true;

		if ($edad >= 18 && !$zapatillas) {
			echo "Puedes pasar";
		} else {
			echo "No puedes pasar";
		}
		
	?>

	<h2>Condicionales if/else (Funcion T/F)</h2>

	<?php 

		$texto = "Hola";

		if (isset($texto)) {
			echo "Esta iniciada";
		} else {
			echo "No esta iniciada";
		}

		echo "<br>";

		if (empty($texto)) {
			echo "Esta iniciada";
		} else {
			echo "No esta iniciada";
		}
	
		echo "<br>";

		$c;

		if (!isset($c)) {
			$c = 8;
		} 
		
		echo $c;

	?>

	<h2>Comprobar numero de palabras (Practica)</h2>

	<?php 

		$texto = "Hola soy Iván";
		$numero_permitido = 3;

		if (str_word_count($texto,0, "á") == $numero_permitido) {
			echo "Cumple con el numero permitido de palabras";
		} else {
			echo "Cumple con el numero permitido de palabras";

		}

	?>

	<h2>Validacion de extension</h2>

	<?php 

		$fichero = "gatito.bonito.jpg";
		$texto_permitido = "jpg";

	?>

	<h3>Opcion por strrchr()</h3>

		<?php 

			$formato = strrchr($fichero, ".");

			if (ltrim($formato, ".") == $texto_permitido) {
				echo "Texto permitido";
			} else {
				echo "Texto no permitido";
			}
			
		?>
	<h3>Opcion con Count()</h3>

		<?php 

			$fichero_array = explode(".", $fichero);

			if ($fichero_array[count($fichero_array) -1] == $texto_permitido) {
				echo "Fichero permitido";
			} else {
				echo "Fichero no permitido";
			}

		?>

	<h3>Opcion con end()</h3>

		<?php 

			if (end($fichero_array) == $texto_permitido) {
				echo "Texto permitido";
			} else {
				echo "Texto no permitido";
			}
			
		?>

	<!------------------------------------------------------------------------------------------------------>

	<h2>Estructura de embudo</h2>

	<?php 

		$edad = 25;
		$hombre = true;

		/*Mensajes
			1º Tienes $edad Años y por tanto no puedes pasar.

			2º Pasas gratis (>= y sea mujer).

			3º Si quieres pasar tienes que pagar.
			*/
 
		if ($edad < 18) {
			echo "Tienes " . $edad . " años y no puedes pasar";
		} else if (!$hombre){
			echo "Pasas gratis";
		}else {
			echo "Si quieres pasar tienes que pagar";
		}
		
		echo "<br>";

		$billete = true;
		$destino = "Francia";
		$mujer = false;

		if (!$billete) {
			echo "No puede vuajar porque no tiene billete";
		} else {
			if ($destino != "Francia") {
				echo "Buen viaje";
			} else {
				if ($mujer) {
					echo "Bon voyage STRA";
				} else {
					echo "Bon voyage SR";
				}
			}
		}
		


	?>
</body>
</html>