<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Ruleta</title>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>


	<?php  

		function generarNumero(){
			return rand(0,36);
		}

		function comprobarColor($tipoApuesta){
			$numero = generarNumero();
			$rojos = [1,3,5,7,9,12,14,16,18,19,21,23,25,27,30,32,34,36];
			if (($tipoApuesta == 'rojo' && in_array($numero, $rojos)) || ($tipoApuesta == 'negro' && !in_array($numero, $rojos)) && ($numero != 0)) {
				return true;
			}else{
				return false;
			}
		}
		function comprobarPar($tipoApuesta){
			$numero = generarNumero();
			$rojos = [2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34,36];
			if (($tipoApuesta == 'par' && in_array($numero, $rojos)) || ($tipoApuesta == 'impar' && !in_array($numero, $rojos)) && ($numero != 0)) {
				return true;
			}else{
				return false;
			}
		}

		if (isset($_GET['form_opcion'])) {
			//Recogemos la opcion de la apuesta que quiere realizar
			$opcionElegida = $_GET['opcion'];

			if ($opcionElegida  == 'rojo' || $opcionElegida = 'negro') {
				//Solo podra apostar por color rojo o negro
				if (comprobarColor($opcionElegida)) {
					echo "<h2>Has ganado</h2>";
				}else{
					echo "<h2>Has perdido</h2>";
				}
				
			}else if ($opcionElegida == 'par' || $opcionElegida == 'impar') {
				//Solo podra apostar por par o impar
				if (comprobarPar($opcionElegida)) {
					echo "<h2>Has ganado</h2>";
				}else{
					echo "<h2>Has perdido</h2>";
				}

			}else if($opcionElegida == 'num_concreto'){
				//Solo podra apostar por un numero concreto
			}
			
		}else{

			echo "<h2>Bienvenido a la Ruleta</h2>";
			echo "<p>Elige una opcion de apuesta</p>";
			echo "<form action='index.php' method='get' enctype='application/x-www-form-urlencoded'>
					<input type='radio' name='opcion' value='rojo' required>Rojo
					<input type='radio' name='opcion' value='par' >Par <br>
					<input type='radio' name='opcion' value='negro' > Negro
					<input type='radio' name='opcion' value='impar' > Impar <br>
					<input type='radio' name='opcion' value='num_concreto' > Numero Concreto <br>
					<input type='number' name='num_apuesta' min='0' max='36' disabled>
					<input type='number' name='dinero_apuesta' min='1' max='100000' required>
					<input type='submit' name='form_opcion' value='Empezar'>
				</form>";
		}

	?>

	<script>

		$("input[value='num_concreto']").on("change", function(){
			if($("input[name='num_apuesta']").is(":checked")){
				$("input[name='num_apuesta']").attr("disabled", true);
			}else{
				$("input[name='num_apuesta']").removeAttr("disabled");
				$("input[name='num_apuesta']").attr("disabled", false);
			}
		})
	</script>
</body>
</html>