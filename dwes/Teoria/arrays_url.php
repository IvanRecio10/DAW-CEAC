<!DOCTYPE html>
<html>
<head>
	<title>Unserialize</title>
	<style type="text/css">
		*{
			font-family: "Calibri";
		}
		label{
			display: block;
			margin-bottom: 1.2em;
		}
		.botones{
			margin-top: 1.2em;
		}
	</style>
</head>
<body>
	<h1>Formulario Radio</h1>
	<form name="formulario" action="procesar_radio.php" method="get" enctype="application/x-www-form-urlencoded">
		<label>Elegir opción</label>
		<input type="radio" name="op" value="1"> Primos
		<input type="radio" name="op" value="2"> Perfectos
		<input type="radio" name="op" value="3"> Superficiales

	<div class="botones">
		<input type="submit" name="enviar" value="Comprobar">
		<input type="reset" value="Limpiar">
	</div>

	</form>
	<?php 
		if(isset($_GET['primos'])){
			$primos = unserialize($_GET['primos']);
			echo "Los numeros primos del 1 al 100: ";
			foreach ($primos as $primo) {
				echo "$primo \n";
			}
		}else if (isset($_GET['perfectos'])){
			$perfectos = unserialize($_GET['perfectos']);
			echo "Los numeros perfectos son: ";
			foreach ($perfectos as $num) {
					echo "$num \n";
				}	
		}else if (isset($_GET['figura'])){
			$figura = unserialize($_GET['figura']);
			echo $figura[0];
		}
	?>

</body>
</html>

