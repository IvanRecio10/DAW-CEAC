<?php  
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "test";

	$conn = mysqli_connect($serverName, $userName, $password, $dbName);

	if (!$conn) {
		die("Conexion fallida:" . mysql_connect_error());
	}

	$sql = "update pruebas set nombre = ? where id = ?";

	//Preparamos la consulta.
	$stmt = mysqli_prepare($conn, $sql);

	$valorNombre = "Maria";
	$valorID = 3;

	mysqli_stmt_bind_param($stmt, "si", $valorNombre, $valorID);

	if(mysqli_stmt_execute($stmt)){
		echo "El valor se ha actualizado correctamente";
	}else{
		echo "Ha ocurrido un error al actualizar los datos";
	}

	mysqli_close($conn);
?>