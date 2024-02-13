<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body style = "background: <?= $_GET['colorFondo']?> ; color: <?= $_GET['colorTexto']?>">
	<p>Bienvenido <?= $_GET['nombre'] ?></p>
	<p><?= $_GET["mensaje"]?></p>
</body>
</html>