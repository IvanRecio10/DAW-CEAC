<?php  

	if (isset($_GET)) {
		$opcion = $_GET['op'];
		if ($opcion == 1) {
			include('ej_primos.php');
			$primos = serialize($primos);
			header("location:arrays_url.php?primos=$primos");
		}else if ($opcion == 2){
			include('ej_perfectos.php');
			$perfectos = serialize($perfectos);
			header("location:arrays_url.php?perfectos=$perfectos");
		}else if($opcion ==3){
			include("figuras.php");
			$figura = serialize($resultado);
			header('location:arrays_url.php?figura=$figura');
		}
	}



?>