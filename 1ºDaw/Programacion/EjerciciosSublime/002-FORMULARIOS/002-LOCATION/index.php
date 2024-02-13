<?php 

extract($_GET);
$msg = "";
 if($_GET){
	switch ($error) {
		case 1:
			$msg = "La contraseña es incorrecta";
			break;
		case 2:
			$msg = "El usuario no existe";
			break;
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIN</title>
</head>
<body>
	<h2>Login</h2>
	<form action="location.php" method="post">
		<input type="email" name="email" placeholder="Correo Elctronico" required>
		<input type="password" name="contraseña" placeholder="Contraseña" required>
		<input type="submit" value="Enviar">
	</form>

	<p><?= $msg ?></p>
</body>
</html>