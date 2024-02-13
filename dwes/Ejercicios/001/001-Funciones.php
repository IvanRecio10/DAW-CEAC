<?php  

	//Creamos la funcion que vamos a usar para generar los numeros.
	function generadorNum($cantidad, $lim_inferior, $lim_superior)	{
		$numsAleatorios = [];
		//Entramos en un bucle que nos va a rellenar el array con la cantidad de numeros que le pasemos
		while (sizeof($numsAleatorios) < $cantidad) {
			//Generamos un numero aleatorio dentro del limite que le pasemos
			$num = rand($lim_inferior, $lim_superior);
			//Comprobamos si el numero generado ya a salido antes y en caso de que no halla salido lo metemos en el array
			if (!in_array($num, $numsAleatorios)) {
				array_push($numsAleatorios, $num);
			}
		}
		//Devolvemos el array con la cantidad de numeros que generemos 
		return $numsAleatorios;
	}

	function validarDatos($cantidad, $limA, $limB){

		if($cantidad <= (abs($limA-$limB)+1)){
			return true;		
		}else{
			return false;
		}

	}

?>