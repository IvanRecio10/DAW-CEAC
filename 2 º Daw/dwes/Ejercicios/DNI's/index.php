<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="utf-8">
	<title>Validacion de DNI</title>
	<style type="text/css">
		body{
			text-align: center;
		}
		h2{
			margin-top: 35px;
		}
		input[type='submit']{
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<!--Para la validación de un DNI necesitamos saber si el resto de la division de la parte númerica del DNI entre 23 coincide con la letra correspondiente-->

	<?php 

	$formulario = "	<form action='index.php' method='get' enctype='application/x-www-form-urlencoded'>
						<input type='text' name='dni' required pattern='[0-9]{8}[A-Za-z]{1}' minlength='9' maxlength='9'><br>
						<input type='submit' name='enviar' value='Validar DNI'>
					</form>"; 

	$letrasPosiblesDNI = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E'];

	if (!isset($_GET['enviar'])) {
		echo "<h2>Introduce un DNI</h2>";
		echo $formulario;
	}else{

		$dniPrueba = $_GET['dni'];
		//Separamos el DNI en su parte numerica y la letra.
		$parteNumerica = substr($dniPrueba, 0, -1);
		$letraDNI = $dniPrueba[strlen($dniPrueba) - 1];
		//Comprobamos que la letra del DNI introduciodo sea igual a la posicion de la letra en la lista que contenga todas las letras posibles y que corresponda con el resto de la parte numerica del DNI entre 23.
		if(strtoupper($letraDNI) == $letrasPosiblesDNI[$parteNumerica%23]){
			echo "<p>El DNI $dniPrueba es correcto</p>"; 
		}else{
			echo "<p>El DNI $dniPrueba no es valido</p>";
		}
	}
	?>
</body>
</html>