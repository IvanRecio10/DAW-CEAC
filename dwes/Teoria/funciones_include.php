<?php  

	function numerosPrimos(){

		for ($i = 1; $i <= 100; $i++){
			$esPrimo = true;
			for ($p_d = 2; $p_d <= $i/2 && $esPrimo; $p_d++){ 
				if($i%$p_d == 0){ 
					$esPrimo = false;
				}
			}
			if($esPrimo && $i != 1){
				echo $i ." ";
			}
		}
	}



?>