<?php  

	include('funciones.php');

	if(isset($_GET['numCartones'])){

		$listaCartones = array();
		$numerosYaSalidos = array();

		$numCartones = $_GET['numCartones'];
		//Primero generamos los cartones llamando a la funcion
		for ($i=0; $i < $numCartones ; $i++) { 
			$listaCartones[$i] = generarCartones();
		}

		$seguir = false;
		$fin = true;

		while ($fin) {
			$numerosYaSalidos = generarNumero($numerosYaSalidos);

			for ($i=0; $i < sizeof($listaCartones) && !$seguir; $i++) {
				$carton = $listaCartones[$i]; 
				if (comprobarCarton($numerosYaSalidos, $carton)) {
					$seguir = true;
					$fin = false;
				}
			}
		}

		$carton = serialize($carton);
		$numerosYaSalidos = serialize($numerosYaSalidos);
		header("location:index.php?carton=$carton&numerosYaSalidos=$numerosYaSalidos");
	}

?>