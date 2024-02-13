<?php  

	if(isset($_GET["enviar"])){
		$nota = $_GET['nota'];
		if($nota < 5){
			$feedback = "Has suspendido";
		}else if($nota < 7){
			$feedback = "Has sacado un bien";
		}else if($nota < 9){
			$feedback = "Has sacado un notable";
		}else{
			$feedback = "Has sacado un sobresaliente";
		}

		header("location:formularios.php?resultado=$feedback");

	}else{
		header("location:formularios.php");
	}




?>