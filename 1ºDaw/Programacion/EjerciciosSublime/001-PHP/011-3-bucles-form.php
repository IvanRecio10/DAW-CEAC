<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Formularios con checkbox</h2>
	<form action="<?php $_SERVER["PHP_SELF"]?>" method= "get">
		<input type="checkbox" name="ciudad[]" value = "Madrid">Madrid
		<input type="checkbox" name="ciudad[]" value="Zaragoza">Zaragoza
		<input type="checkbox" name="ciudad[]" value="Barcelona">Barcelona

		<input type="submit" name="btn1" value="Enviar">
	</form>

	<?php 

		if (isset($_GET["btn1"])){
			extract($_GET);
			$ciudadElegida = "";
			foreach ($ciudad as $valorCiudad) {
				$ciudadElegida .= $valorCiudad . ", ";
			}

			echo "Te gustaria viajar a: " . rtrim($ciudadElegida, ", ");
		}

	?>

	<h2>Formulario con select multiple</h2>
	<form>
		<select name="paises[]" multiple>
			<option>España</option>
			<option>Italia</option>
			<option>Portugal</option>
			<option>Francia</option>
		</select>
		<input type="submit" name="btn2" value="Enviar">
	</form>

	<?php 

		if (isset($_GET["btn2"])){
			extract($_GET);
			$paisesSeleccionados = "";
			foreach ($paises as $pais) {
				$paisesSeleccionados .= $pais . ", ";
			}
			echo "Los paises seleccionados son : " . rtrim($paisesSeleccionados, ", ");
		}

	?>
</body>
</html>