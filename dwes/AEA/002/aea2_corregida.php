<!DOCTYPE html>
<html>
<head>
	<title>Adivinar número</title>
</head>
<body>


	<?php 

		/*
		Adivinar un número (1-100)
		Defino la variable acierto a FALSE
		Si he pulsado en enviar:
			Recojo los datos del formulario	
				Recojo el intento
				Recojo el número pensado (aleatorio)
				Recojo el número introducido por el formulario
				Recojo límite inferior
				Recojo límite superior
			Incremento el intento
		 
			Muestro el mensaje: intento número x
			Si número coincide con aleatorio
				Muestro Enhorabuena, etc.
				Cambio acierto a TRUE
			En caso contrario, si aleatorio>numero
				Muestro: el número a adivinar es mayor que tu número
				Redefino límite inferior (número+1)
			En caso contrario, si aleatorio<numero
				Muestro: el número a adivinar es menor que tu número
				Redefino límite superior (número-1)
		En caso contrario (primera vez):
			Defino límite inferior (1)
			Defino límite superior (100)
			Genero número pensado (aleatorio)
			Defino intento con valor 0, ya que todavía no he empezado a jugar
		 
		 
		 
		Si no he cubierto todos los intentos (intento<5) y no he acertado, muestro el formulario
		En el formulario necesito:
			Enviar el número (introducir el número (número))
			Enviar el número a acertar (oculto)
			Enviar el intento (oculto)
			Enviar el límite inferior  (oculto)
			Enviar el límite superior (oculto)
		En caso contrario (he acertado o he acabado con los intentos):
			Muestro el número que había pensado
			Muestro el enlace para jugar de nuevo
		*/

		$acierto = false;

		if(isset($_GET['enviar'])){
			$intento = $_GET['intento'];
			$numeroPrograma = $_GET['numeroPrograma'];
			$numeroUsuario = $_GET['numeroUsuario'];
			$limInferior = $_GET['limInferior'];
			$limSuperior = $_GET['limSuperior'];
			$intento++;

			if ($numeroUsuario == $numeroPrograma) {
				echo "<h2>Enhorabuena has ganado</h2>";
				$acierto = true;
			}else if($numeroUsuario > $numeroPrograma){
				echo "<p>El numero que has pensado es mayor</p>";
				$limSuperior = $numeroUsuario-1;
			}else{
				echo "<p>El numero que has pensado es menor</p>";
				$limInferior = $numeroUsuario+1;
			}
		
			echo "<p>Estas en el intento numero $intento</p>";
		}else{
			echo "<h1>Bienvenido al Juego</h1>";
			echo "<h2>Intenta adivinar el numero</h2>";
			$intento = 0;
			$limInferior = 1;
			$limSuperior = 100;
			$numeroPrograma = rand($limInferior, $limSuperior);
		}

		$formulario = "	<form action='aea2_corregida.php' method='get' enctype='application/x-www-form-urlencoded'>
							<label>Introduce un numero</label>
							<input type='number' name='numeroUsuario' min='$limInferior' max='$limSuperior' required>
							<input type='submit' name='enviar' value='Enviar'>
							<input type='hidden' name='intento' value='$intento'>
							<input type='hidden' name='numeroPrograma' value='$numeroPrograma'>
							<input type='hidden' name='limInferior' value='$limInferior'>
							<input type='hidden' name='limSuperior' value='$limSuperior'>
						</form>";

		if($intento < 5 && !$acierto){
			echo $formulario;
		}else{
			if ($intento == 5) {
				echo "<h2>Ohh, has perdido</h2>";
			}
			echo "<p>El numero que habia pensado era el $numeroPrograma</p>";
			echo "<a href='aea2_corregida.php'>Volver a jugar</a>";
		}



	?>
</body>
</html>