<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bingo</title>
</head>
<body>



	<?php  
		//Creamos el formulario que nos pida el numero de cartones con el que vamos a jugar.
		$formulario = "<form action='procesador.php' method='get' enctype='application/x-www-form-urlencoded'>
						<label>Numero de Cartones:</label>
						<input type='number' name='numCartones' min='1' max='10' required>
						<input type='submit' value='Jugar'>
					   </form>";
		if (!isset($_GET['carton'])) {
			echo $formulario;
		}else{
			$carton = unserialize($_GET['carton']);
			$numerosSalidos = unserialize($_GET['numerosYaSalidos']);

			echo "<h2>Enhorabuena</h2>";
			echo "<p>El carton ganador ha sido el: </p>";
			foreach ($carton as $numCar) {
				echo "$numCar ";
			}
			$tamaño = count($numerosSalidos);
			echo "<p>Han salido un total de $tamaño: </p>";
			foreach ($numerosSalidos as $num) {
				echo "$num ";
			}

			echo "<br><a href='index.php'>Volver a Jugar</a>";
		}

	?>
</body>
</html>