<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Switch</title>
</head>
<body>
	<h2>Validacion con switch</h2>
		<?php 

			$lugarNacimiento = "madrid";

			switch ($lugarNacimiento) {
				case 'madrid':
					echo "Eres un crack";
					break;
				case "barcelona":
					echo "Que desgracia";
				default:
					echo "Eres ciudadano del mundo";
			}
		?>

		<!----------------------PRACTICA------------------------>

		<h2>Practica</h2>

		<?php 

			$edad = 1996;
			$destino = "Alemania";
		
			if ($edad < 2005) {
				switch($destino){
					case 'Francia':
						echo "Bon voyage";
						break;
					case 'Alemania':
						echo "Gute Farth";
						break;
					case 'Inglaterra':
						echo "Good trip";
						break;
					default:
						echo "Buen viaje";
				}
			} else {
				$años = (2023-$edad);
				echo "Debes viajar en compañia de un adulto ya que tienes " . $años ." años";
			}
			

		?>


</body>
</html>