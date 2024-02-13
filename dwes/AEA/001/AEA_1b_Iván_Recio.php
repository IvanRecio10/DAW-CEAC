<?php  

	echo "<h1>Juego de números</h1>";

	$lim_inferior = 1;
	$lim_superior = 100;
	$numAdivinar = rand($lim_inferior, $lim_superior);
	$intentos = 0;
	$seguir = false;

	while ($intentos < 5 and !$seguir) {
		$intentos++;
		$numIntento = rand($lim_inferior, $lim_superior);
		if ($numIntento == $numAdivinar) {
			$seguir = true;
		}else if ($numAdivinar > $numIntento){
			$lim_inferior = $numIntento + 1;
			echo "<p>Es tu intento $intentos. Y el numero que has pensado es el $numIntento. El numero a adivinar es mayor.</p>";
		}else if ($numAdivinar < $numIntento){
			$lim_superior = $numIntento - 1;
			echo "<p>Es tu intento $intentos. Y el numero que has pensado es el $numIntento. El numero a adivinar es menor.</p>";	
		}
	}

	if($seguir){
		echo "<p>Enhorabuena has acertado el numero $numIntento, en el intento $intentos</p>";
	}else{
		echo "<p>Te has quedado sin intentos el numero era $numAdivinar</p>";
	}
?>