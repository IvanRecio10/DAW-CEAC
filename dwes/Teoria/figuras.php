<?php 

	$figuras = ['triángulo', 'rectángulo', 'rombo', 'trapecio'];
	$figura = 'rombo';
	$numero1 = 3;
	$numero2 = 5;
	$resultado = [];
	$resultado[]= $figura;
	if(in_array($figura, $figuras) && $numero1 > 0 && $numero2 > 0){
		$resultado[] = figuras($numero1, $numero2, $figura);
	}else{
		echo 'Error';
	}
	function figuras($num1, $num2, $figura){
		if($figura == 'triangulo' || $figura == 'rombo'){
			$resultado = ($num1*$num2)/2;
		}else{
			$resultado = $num1*$num2;
		}
		return $resultado;
	}

?>