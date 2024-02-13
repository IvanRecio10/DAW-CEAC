<?php  

	$perfectos =[];

	for($i=1; $i <= 1000 ; $i++) { 
		$num = 0;
		for($nDiv = 1; $nDiv < $i; $nDiv++){
			if ($i%$nDiv == 0){
			 	$num += $nDiv;
			} 
		}
		if ($num == $i) {
			array_push($perfectos, $num);
		}
	}



?>