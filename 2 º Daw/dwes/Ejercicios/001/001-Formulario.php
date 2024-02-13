<!DOCTYPE html>
<html>
<head>
	<title>001-Formulario</title>
</head>
<body>
	
	<?php 

	//Llamamos al archivo que contenga las funciones
	include("001-Funciones.php");

		//Creamos el formulario desde php
		$form = "<form name='formulario' action='001-Formulario.php' method='get' enctype='application/x-www-form-urlencoded'>
					<label>Cantidad</label><br>
					<input type='number' name='cantidad' max='100' min='1' required><br>
					<label>Limite A</label><br>
					<input type='number' name='limA' min='1' max='100' required><br>
					<label>Limite B</label><br>
					<input type='number' name='limB' min='1' max='100' required><br>
					<input type='submit' value='enviar'>
				</form>";

		//Pintamos el formulario.
		if(!isset($_GET['cantidad'])) {
			echo $form;
		}else{
			//Recogemos los datos.
			$cantidad = $_GET['cantidad'];
			$limA = $_GET['limA'];
			$limB = $_GET['limB'];
			//Comprobamos si los datos son validos.
			if (validarDatos($cantidad, $limA, $limB)) {
				//Llamamos a la función con los datos que el hemos pasado a traves del formulario.
				$arrayNums = generadorNum($cantidad, $limA, $limB);
				//Vamos a comprobar cual de los dos limites introducidos son el limite mayor o el limite menor.
				if ($limA > $limB) {
					//Establecemos los valores a los limites para pintarlos por pantalla
					$lim_superior = $limA;
					$lim_inferior = $limB;
				}else{
					$lim_superior = $limB;
					$lim_inferior = $limA;
				}
				//Pintamos primero los resultados que queremos como la cantidad y los limites que hemos establecido.
				echo "<p>Vamos a generar una cantidad de $cantidad números aleatorios entre el $lim_inferior - $lim_superior</p>";
				//Pintamos el array de los numeros generados.
				foreach ($arrayNums as $num) {
					echo "$num /";
				}
			}
		}



	?>
</body>
</html>