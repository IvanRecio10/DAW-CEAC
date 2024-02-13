<?php 

	//Para abrir una carpeta usamos la funcion opendir(carpeta)
	$directorio = opendir("img/");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 

		//Para leer los archivos de una carpeta usamos la funcion readdir($directorio);
		while ($nameFile = readdir($directorio)) { ?>
			<img src="img/<?= $nameFile ?>" width = "200px">	
		<?php } ?>

</body>
</html>