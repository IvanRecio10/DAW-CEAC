<?php 

	extract($_GET);
	// $cantidad, $origen , $destino.
	$dol_euro = 0.91;
	$lib_euro = 1.12;
	$simbolo = "€";

	switch ($origen) {
		case 0:
			break;
		case 1:
			$cantidad *= $dol_euro;
			$simbolo = "$";
			break;
		case 2:
			$cantidad *= $lib_euro;
			$simbolo = "£";
			break;
	}

	switch ($destino) {
		case 0:
			break;
		case 1:
			$cantidad /= $dol_euro;
			$simbolo = "$";
			break;
		case 2:
			$cantidad /= $lib_euro;
			$simbolo = "£";
			break;
	}	

	//Con la funcion round() hace que redonde la variable que le introduzcas con los caracteres que tu quieres que te pinga como maximo.

	$cantidad = round($cantidad, 2);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Resultado de conversion</h2>
	<p><?= $cantidad . " " . $simbolo ?></p>
</body>
</html>