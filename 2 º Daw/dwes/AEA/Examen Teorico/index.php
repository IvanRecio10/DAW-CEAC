<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Bingo</title>
</head>
<body>
	<?php  
		//Hacemos las funciones que nos van a permitir hacer el juego del bingo
		function generarBombo(){
			//Creamos la funcion que nos genere el bombo con un bucle for del 1 al 100 que vaya introduciendo los numeros
			$bombo = [];
			for ($i=1; $i <= 100; $i++) { 
				$bombo[] = $i;
			}
			return $bombo;
		}
		function crearCarton(){
			//Creamos la variable $carton que se rellenara aleatoriamente con 15 numeros del 1-100 sin repetirse.
			$carton = [];
			while (sizeof($carton) < 15) {
				$numeroAleatorio = rand(1,100);
				if (!in_array($numeroAleatorio, $carton)) {
					array_push($carton, $numeroAleatorio);
				}
			}
			return $carton;
		}
		function jugarBingo($nombreUsuario){
			//Generamos el bombo y el carton
			$bombo = generarBombo();
			$carton = crearCarton();
			$juego = true;
			$aciertos = 0;
			//Ordenamos el carton y lo mostramos.
			sort($carton);
			echo "<p>Este es tu carton:</p>";
			foreach ($carton as $numero) {
				echo "$numero  ";
			}
			//Creamos un contador para saber el numero de extracciones que hacemos
			$contador = 0;
			//Sacamos bolas del bombo con un bucle do while hasta que el sizeof($carton) != 0
			do {
				$contador++;
				$posicion = rand(0, sizeof($bombo)-1);
				//Si el numero esta en el carton
				if (in_array($bombo[$posicion], $carton)) {
					//Pintamos el numero que ha salido esta en el carton y eliminamos el numero que haya salido en $carton
					echo "<p style='color: green'>El numero $bombo[$posicion] esta en el carton. Has acertado.</p>";
					$aciertos++;
				}else{
					//Si el numero no esta en el carton pintamos el numero que ha salido no esta en el $carton
					echo "<p style='color: red'>El numero $bombo[$posicion] no esta en el carton.</p>";					
				}
				//Eliminamos el numero que a salido en $bombo
				array_splice($bombo, $posicion, 1);
				if ($aciertos == 15) {
					$juego = false;
				}
			} while ($juego);
			//Cuando hayamos tachado todos los numeros que estan en el carton Mostramos "Enhorabuena $nombreUsuario has cantado bingo con $contador extracciones de bolas"
			echo "<p>Enhorabuena $nombreUsuario has cantado bingo en $contador extracciones de bolas</p>";
		}
		if (isset($_GET['enviar'])) {
			//Recogemos el nombre que ha introducido y generamos el carton y el bombo para empezar a jugar
			$nombreUsuario = $_GET['nombre'];
			jugarBingo($nombreUsuario);
		}else{
			//Le damos la bienvenida y le pedimos su nombre de usuario
			echo "<h1>Bienvenido al juego del Bingo</h1>";
			echo "<h3>Introduce su nombre para poder empezar a jugar</h3>";
			echo "	<form action='index.php' method='get' enctype='application/x-www-form-urlencoded'>
						<input type='text' name='nombre' required>
						<input type='submit' name='enviar' value='Jugar'>
					</form>";
		}
	?>
</body>
</html>