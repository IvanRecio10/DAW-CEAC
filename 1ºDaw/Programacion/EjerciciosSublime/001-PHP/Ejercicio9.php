<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Operadores</title>
</head>
<body>
	<h2>Operadores de asignación</h2>

	<?php 
		$a = 2;
		echo $a ."<br>";
		$a = 3; //Reasignamos el valor de la variable

		$a += 2; // a = a + 2
		echo $a . "<br>";

		$texto = "Buenos";
		$texto .= " dias" . "<br>";
		echo $texto . "<br>";

	?>

	<h2>Operadores de igualdad</h2>

	<?php 

		$a = 1;
		$b = "1";
		$c = 3;

		echo "¿$a es igual a $b" . ($a == $b) . "<br>";
		echo "¿$a es igual a $b" . ($a === $b) . "<br>";
		echo "¿$a es diferente de $c?" . ($a != $c) . "<br>";
		echo "¿$a es distinto en caracter y tipo a $b?" . ($a !== $b) . "<br>";

	?>

	<h2>Operadores de comparacion</h2>

	<?php 

		$a = 1;
		$b = 3;
		$c = 3;

		echo "$a es mayor que $b" . ($a > $b) . "<br>";
		echo "$a es menor que $b" . ($a < $b) . "<br>";
		echo "$a es mayor o igual que $b" . ($a >= $b) . "<br>";
		echo "$a es menor o igual que $b" . ($a <= $b) . "<br>";

	?>

	<h2>Orepadores logicos</h2>

	<?php 

		// && == AND // || == OR

		$a = 1;
		$b = 3;
		$c = 5;

		echo "Resultado: " . (($a < $b) && ($c > $a)) . "<br>"; // T && T = T
		echo "Resultado: " . (($a < $b) && ($c < $a)) . "<br>"; // T && F = F
		echo "Resultado: " . (($a < $b) || ($c > $a)) . "<br>"; // T || T = T
 		echo "Resultado: " . (($a < $b) || ($c < $a)) . "<br>"; // F || T = T
		echo "Resultado: " . (($a > $b) || ($c > $a) && ($c < $a)) . "<br>"; // F || T && F = F  Predomina el operador (&&) sobre el operador (||).

	?>

	<h2>Operadores de autoincremento y autodecremento</h2>

	<?php

		//Si el operador va antes de la variable se incrementa antes de pintarlo. Si el operador va despues de la variable se pintara primero y luego se incrementara

		$a = 2;

		echo ++$a;
		echo --$a;

	?>

	<h2>Operadores aritmeticos</h2>

	<?php 

		$a = 3; 
		$b = 6;

		echo "$a + $b = " . ($a + $b) . "<br>";
		echo "$a - $b = " . ($a - $b) . "<br>";
		echo "$a * $b = " . ($a * $b) . "<br>";
		echo "$a / $b = " . ($a / $b) . "<br>";
		echo "$a % $b = " . ($a % $b) . "<br>";

	?>
</body>
</html>