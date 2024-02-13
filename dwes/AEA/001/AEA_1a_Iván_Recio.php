<?php  

	echo "<h1>Menús</h1>";

	$primeros = ["Sopa", "Ensalada", "Macarrones", "Gazpacho", "Salmorejo"];
	$segundos = ["Pollo al Ajillo", "Cordero", "Pollo Asado", "Lenguado", "Lomo"];
	$postres = ["Natillas", "Flan", "Tarta", "Sorbete", "Helado"];

	function menu($platos){

		$menuAleatorio = [];

		while (sizeof($menuAleatorio) < sizeof($platos)){

			$posicion = rand(0,4);
			if(!in_array($platos[$posicion], $menuAleatorio)){
				array_push($menuAleatorio, $platos[$posicion]);
			}

		}

		return $menuAleatorio;

	}

	$primeros_aleatorios = menu($primeros);
	$segundos_aleatorios = menu($segundos);
	$postres_aleatorios = menu($postres);

	for($i = 0; $i<5;$i++){
		echo "<p> Dia" . $i+1 . ": </p> <p>$primeros_aleatorios[$i]</p> <p>$segundos_aleatorios[$i]</p> <p>$postres_aleatorios[$i]</p> <br>";
	}
?>