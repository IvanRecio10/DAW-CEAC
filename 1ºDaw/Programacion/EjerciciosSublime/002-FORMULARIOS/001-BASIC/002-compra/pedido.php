<?php 

	extract($_POST);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<p>Gracias <?= $nombre ?> por realizar el siguiente pedido</p>
	<ul>
		<?php 

			foreach ($productos as $producto) { ?>
				<li> <?= $producto ?> </li>
			<?php }	?>
	</ul>
</body>
</html>