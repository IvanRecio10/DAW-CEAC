<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bucles</title>
</head>
<body>
	<h2>WHILE</h2>

	<?php 

		$a =3;
		while ($a < 10) {
			echo "Hola<br>";
			$a++;
		}

	?>

	<h2>FOR</h2>

	<?php 

		for ($i=0; $i < 11 ; $i++) { 
			echo $i . "-";
		}
	?>

	<h2>FOREACH</h2>

	<?php 

		$usuarios = array("u1" => "John", "u2" => "Sergio", "u3" => "Ricardo")

	?>

</body>
</html>