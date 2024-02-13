<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Juego 7 y media</title>
</head>
<body>


	<?php  

		if(!isset($_GET['empezar']) && !isset($_GET['juego'])){
			//Para empezar el juego de las 7 y media vamos a generar una baraja que es la que vamos a ir usando.
			$baraja = [1,2,3,4,5,6,7,0.5,0.5,0.5,1,2,3,4,5,6,7,0.5,0.5,0.5,1,2,3,4,5,6,7,0.5,0.5,0.5,1,2,3,4,5,6,7,0.5,0.5,0.5];

			$numUsuario = 0;
			$juegoValido = true;
			$baraja = serialize($baraja);
			$formularioIncio = "<form action='index.php' method='get' enctype='application/x-www-form-urlencoded'>
									<input type='submit' name='empezar' value='Vamos a Jugar'>
									<input type='hidden' name='numUsuario' value='$numUsuario'>
									<input type='hidden' name='juego' value='Pedir Carta'>
									<input type='hidden' name='baraja' value='$baraja'>
									<input type='hidden' name='juegoValido' value='$juegoValido'>
								</form>";

			echo "<h2>Bienvenido al juego de las 7 y media</h2>";
			echo "$formularioIncio";

		}else{

			$juegoValido = $_GET['juegoValido'];

			if ($_GET['juego'] == "Pedir Carta" && $juegoValido) {

				$baraja = unserialize($_GET['baraja']);
				$numUsuario = $_GET['numUsuario'];
				$numeroJuego = rand(0, sizeof($baraja)-1);
				$numUsuario += $baraja[$numeroJuego];
				$baraja = array_splice($baraja, $numeroJuego, 1);
				$baraja = serialize($baraja);

				if ($numUsuario >= 7.5) {
					$juegoValido = false;
				}

				$formularioJuego = "<form action='index.php' method='get' enctype='application/x-www-form-urlencoded'>
										<input type='submit' name='juego' value='Pedir Carta'>
										<input type='submit' name='juego' value='Plantarse'>
										<input type='hidden' name='baraja' value='$baraja'>
										<input type='hidden' name='numUsuario' value='$numUsuario'>
										<input type='hidden' name='juegoValido' value='$juegoValido'>
									</form>";

				echo "$formularioJuego";
				echo "<p>$numUsuario</p>";

			}else{

				$juegoUsuario = 0;
				$numUsuario = $_GET['numUsuario'];
				$baraja = unserialize($_GET['baraja']);

				while ($juegoUsuario < $numUsuario && $juegoUsuario <=6) {

					$numeroJuego = rand(0, sizeof($baraja)-1);
					$juegoUsuario += $baraja[$numeroJuego];
					$baraja = array_splice($baraja, $numeroJuego, 1);
					
				}
				echo "<p>Juegas con el $numUsuario</p>";
				echo "<p>La maquina juega con el $juegoUsuario</p>";
				if($numUsuario > 7.5 || $numUsuario <= $juegoUsuario){
					echo "<p>Has Perdido</p>";
				}else{
					echo "<p>Has Ganado</p>";
				}

			}
		}

	?>


</body>
</html>