<?php  
	
	function generarCartones(){
		//Creamos las variables que necesitemos para crear el carton del bingo
		$carton = array();
		$lim1 = 1;
		$lim2 = 10;
		$intervalo = 2;
		//Creamos un bucle que no finalize hasta que el tamaño del array del carton no sea 20
		while (sizeof($carton) < 20) {
			//Dentro de este bucle generamos otro bucle que el va a ser quien nos genere los dos numeros dentro del intervalo que queremos 
			while (sizeof($carton) < $intervalo) {
				$numeroAleatorio = rand($lim1,$lim2);
				if (!in_array($numeroAleatorio, $carton)) {
					array_push($carton, $numeroAleatorio);
				}
			}
			//Cuando se acabe de generar los dos numeros dentro de el carton el los limites cambiaran y el numero de 
			$intervalo+=2;
			$lim1 += 10;
			$lim2 +=10;
		}

		sort($carton);

		return $carton;

	}

	function generarNumero($numerosYaSalidos){
		//Declaramos la variable tipo booleana $seguir True para que entre al bucle donde nos va a generar un numero aleatorio comprobando si esta en el array.
		$seguir = true;
		while ($seguir){
			$num = rand(1,100);
			//Comprobamos que el numero que haya salido no este en el array que le hemos pasado
			if (!in_array($num, $numerosYaSalidos)) {
				$seguir = false;
				array_push($numerosYaSalidos, $num);
			}
		}
		return $numerosYaSalidos;
	}

	function comprobarCarton($numerosYaSalidos, $carton){
		$bingo = false;
		$contador = 0;
		
		for ($i=0; $i < sizeof($numerosYaSalidos) && !$bingo; $i++) { 
			if (in_array($numerosYaSalidos[$i], $carton)) {
				$contador++;
				if ($contador == 20) {
					$bingo = true;
				}
			}
		}

		if ($bingo){
			return true;
		}else{
			return false;
		}
	}

?>