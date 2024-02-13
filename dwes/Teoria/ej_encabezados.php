<?php  

	for ($i = 1; $i < 7; $i++){
		echo "<h$i>Texto escrito en h$i</h$i>";
	}

	$b = 1;
	while ($b < 7){
		echo "<h$b>Texto escrito en h$b</h$b>";
	$b++;		
	}

//Numero primos del 1 al 100

	for ($i = 1; $i <= 100; $i++){
		$nDiv = 0;
		for ($n = 1; $n <= $i; $n++){ 
			if($i%$n == 0){ 
				$nDiv++;
			}
		}
		if($nDiv == 2 or $i == 1){
			echo $i ."<br>";
		}
	}

?>