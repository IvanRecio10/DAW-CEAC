<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adivina el numero del 1-100</title>
</head>
<body>


	<?php 
	//Primero vamso a comporbar si ya ehmos generado algun numero para que te genere el formulario, los intentos y el numero aleatorio que vamso a adivinar.
		if (!isset($_GET['enviarNumero'])) {
			$numeroPrograma = rand(1,100);
			$intentos = 1;
			$formulario = "<form action='ivan_recio_aea2.php' method='get' enctype='application/x-www-form-urlencoded'>
									<label>Introduce un numero:</label>
									<input type='number' name='numIntroducido' min='1' max='100' required>
									<input type='hidden' name='quitarInicio'>
									<input type='hidden' name='limInferior' value='1'>
									<input type='hidden' name='limSuperior' value='100'>
									<input type='hidden' name='numeroPrograma' value='$numeroPrograma'>
									<input type='hidden' name='intentos' value='$intentos'>
									<input type='submit' value='Enviar' name='enviarNumero'>
								</form>";
		}

		//Si no le hemos pasado nunca ningun numero por parametro le vamos a pintar el primer formulario que hemos creado.
		if (!isset($_GET['quitarInicio'])) {
			echo "<h1>He pensado un numero</h1>";
			echo "<h2>Intenta adivinarlo</h2>";
			echo "$formulario";
		}else{
			//Si ya le hemos enviado algun numero ps entonces recogeremos las variables para poder hacer las comporbaciones
			$ganador = false;
			$intentos = $_GET['intentos'];
			$numeroPrograma = $_GET['numeroPrograma'];
			$limInferior = $_GET['limInferior'];
			$limSuperior = $_GET['limSuperior'];
			$numIntroducido = $_GET['numIntroducido'];
			//Primero comporbaremos el numero de intentos que llevamos
			if ($intentos < 5) {
				//Si el numero de intentos no es mayor a 5 entonces comprobaremos si el numero es valido 
				if($numIntroducido > $limSuperior || $numIntroducido < $limInferior){
					echo "<h1>Has gastado un intento absurdamente</h1>";
					echo "<p>Este era el intento numero $intentos</p>";
				}else{
					//Una vez comporbado si el numero es valido miraremos a ver si es mayor, menor o es el mismo numero que ha pensado el programa.
					//Tambien le pintamos el feedback de la comporbacion.
					if($numIntroducido == $numeroPrograma){
						echo "<h1>Enhorabuena has ganado</h1>";
						echo "<p>Has acertado en el intento numero $intentos. El numero a adivinar era el $numIntroducido</p>";
						$ganador = true;
					}else if ($numIntroducido < $numeroPrograma) {
						echo "<h1>Sigue Intentandolo</h1>";
						echo "<p>Has introducido el numero $numIntroducido, el numero que he pensado es mayor, este es tu intento numero $intentos</p>";
						$limInferior = $numIntroducido+1;
					}else if($numIntroducido > $numeroPrograma){
						echo "<h1>Sigue Intentandolo</h1>";
						echo "<p>Has introducido el numero $numIntroducido, el numero que he pensado es menor, este es tu intento numero $intentos</p>";
						$limSuperior = $numIntroducido-1;
					}	
				}	
				$intentos++;
				//Reescribimos el formulario con los nuevos datos que le queramos pasar al programa de forma escondida y se lo pintamos
				$formulario = "<form action='ivan_recio_aea2.php' method='get' enctype='application/x-www-form-urlencoded'>
								<label>Introduce un numero:</label>
								<input type='number' name='numIntroducido' min='1' max='100' required>
								<input type='hidden' name='quitarInicio'>
								<input type='hidden' name='limInferior' value='$limInferior'>
								<input type='hidden' name='limSuperior' value='$limSuperior'>
								<input type='hidden' name='numeroPrograma' value='$numeroPrograma'>
								<input type='hidden' name='intentos' value='$intentos'>
								<input type='submit' value='enviar' name='enviarNumero'>
							   </form>";
					
				if (!$ganador) {
					echo "$formulario";
				}
					
				
			}else{
				//Si el usuario ha gastado todos los intentos le pintaremos has perdido
				echo "<h1>Has perdido</h1>";
				echo "<p>Has agotado los 5 intentos, el numero que habia que adivinar era el $numeroPrograma</p>";
				echo "<a href='ivan_recio_aea2.php'>Volver a Jugar</a>";
			}
		}
	?>
</body>
</html>