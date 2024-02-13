<?php 

	function decirHola(){
		return "Hola" . "<br>";
	}

	function decirTexto($texto, $texto1){
		return $texto . " " . $texto1 . "<br>";
	}

	function decirTextoLongitud($texto, $texto1){
		return str_word_count($texto) . " " . str_word_count($texto1) . "<br>";
	}

	function padre(){
		/*$aux = hija("Funcion padre llama a la funcion hija");
		return $aux;*/
		return hija(decirHola());
	}

	function hija($param1){		
	$param1 .= "1";
	return $param1;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Funciones</title>
</head>
<body>
	<?= decirHola() ?>
	<?= decirTexto("Hola", "adios") ?>
	<?= decirTextoLongitud("Hola buenas tardes", "Me llamo Ivan Recio Heras") ?>
	<?= padre() ?>
</body>
</html>