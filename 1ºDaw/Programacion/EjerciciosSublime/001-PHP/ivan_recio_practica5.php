<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practica 5</title>
</head>
<body>
	<form action="<?php $_SERVER["PHP_SELF"]?>" method="get">
		<input type="number" name="numero" placeholder="Inserte su numero">
		<input type="submit" name="form1" value="Enviar">
	</form>

	<?php 

		extract($_GET);
		if (!empty($form1)) {
			if($numero >= 0 && $numero <=24){
				switch ($numero) {
					case 7:
					case 8:
					case 9:
					case 10:
					case 11:
					case 12:
						echo "Buenos dias";
						break;
					case 13:
					case 14:
					case 15:
					case 16:
					case 17:
					case 18:
					case 19:
					case 20:
						echo "Buenas tardes";
						break;
					default:
						echo "Buenas noches";
					}
			}else{
				echo "Hora invalida";	
			}
		}
		

	?>
</body>
</html>