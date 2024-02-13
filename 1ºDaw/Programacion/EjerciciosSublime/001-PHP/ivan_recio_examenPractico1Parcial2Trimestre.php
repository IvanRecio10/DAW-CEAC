<!DOCTYPE html>
<html>
<head lang = "es">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Examen</title>
</head>
<body>
	<form action="<?php $_SERVER["PHP_SELF"]?>" method = "get">
		<input type="number" name="dia" placeholder="Introduce el dia">
		<input type="number" name="mes" placeholder="Introduce el mes">
		<input type="number" name="año" placeholder="Introduce el año">
		<input type="submit" name="form1" value="Enviar">
	</form>

	<?php 

		extract($_GET);
		if (!empty($dia) && !empty($mes) && !empty($año)) {
			if($dia >= 1 && $dia <= 31){
				if($mes >= 1 && $mes <= 12){
					if ($dia == 31) {
						switch ($mes) {
							case 2:
								echo "El mes de febrero tiene como maximo 28 dias";
								break;
							case 4:
							case 6:
							case 9:
							case 11:
								echo "Este mes tiene 30 dias";
								break;
							case 1:
								echo $dia . " de Enero de " . $año;
								break;
							case 3:
								echo $dia . " de Marzo de " . $año;
								break;
							case 5:
								echo $dia . " de Mayo de " . $año;
								break;
							case 7:
								echo $dia . " de Julio de " . $año;
								break;
							case 8: 
								echo $dia . " de Agosto de " . $año;
								break;
							case 10:
								echo $dia . " de Octubre de " . $año;
								break;
							default;
								echo $dia . " de Diciembre de " . $año;
						}
					}else if ($dia > 28 && $mes == 2) {
						echo "El mes de Febrero tiene como maximo 28 dias";
					}else{
						switch ($mes) {
							case 2:
								echo $dia . " de Febrero de " . $año;
								break;
							case 4:
								echo $dia . " de Abril de " . $año;
								break;
							case 6:
								echo $dia . " de Junio de " . $año;
								break;
							case 9:
								echo $dia . " de Septiembre de " . $año;
								break;
							case 11:
								echo $dia . " de Noviembre de " . $año;
								break;
							case 1:
								echo $dia . " de Enero de " . $año;
								break;
							case 3:
								echo $dia . " de Marzo de " . $año;
								break;
							case 5:
								echo $dia . " de Mayo de " . $año;
								break;
							case 7:
								echo $dia . " de Julio de " . $año;
								break;
							case 8: 
								echo $dia . " de Agosto de " . $año;
								break;
							case 10:
								echo $dia . " de Octubre de " . $año;
								break;
							default;
								echo $dia . " de Diciembre de " . $año;
						}
					}
				}else{
					echo "Los meses van comprendidos del 1 al 12";
				}
			}else{
				echo "Los dias van del 1 al 31";
			}
		}else{
			echo "Debes rellenar todos los datos";
		}


	?>
</body>
</html>