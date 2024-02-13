<?php  

//El texto que esta comentado es la opcion menos segura, la opcion que esta sin comentar es la parte buena para introducir datos dentro de una tabla del SQL.

	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "test";

	$conn = mysqli_connect($serverName, $userName, $password, $dbName);
	if (!$conn) {
		die("Conexion Fallida: " . mysql_connect_error());
	}

	//$sql = "insert into Pruebas(Nombre, Edad, Altura) values('Andres', '18', '180')";

	$sql = "insert into Pruebas(Nombre, Edad, Altura) values(?,?,?)";

	//Preparamos la query para asociar los parametros en un paso siguiente.
	$stmt = mysqli_prepare($conn, $sql);

	$valor1 = "Ricardo";
	$valor2 = 18;
	$valor3 = 178;

	//Asociamos los parametros a las ?. Tenemos que pasarle por parametro la query preparada, un array donde se indique cada uno de los datos de los parametros.
	mysqli_stmt_bind_param($stmt,"sii", $valor1, $valor2, $valor3);

	/*if (mysqli_query($conn, $sql)) {
		echo "Nuevo registro introducido correctamente";
	}else{
		echo "Error al introducir un registro";
	}*/

	if (mysqli_stmt_execute($stmt)){	
		echo "Nuevo registro introducido correctamente";
	}else{
		echo "Error al introducir un registro";
	}

mysqli_close($conn);
?>