<?php  

	$serverName = "localhost"; //ID: puerto en la que se encuentra la BBDD y el puerto por el que se accede.
	$userName = "root"; // Nombre del usuario con el que vamos a entrar.
	$password = ""; // Contraseña del usuario
	$dbName = "test"; // Nombre de la BBDD donde estan las tablas con las que vamos a trabajar.

	//mysqli_connect($serverName, $userName, $password, $dbName), funcion para crear la conexion con la base de datos que devuelve un T/F si la conexion se ha realizado con exito.

		$conn = mysqli_connect($serverName, $userName, $password, $dbName);

		if (!$conn) {
			die("La conexion con la BBDD ha sido fallida" . mysql_connect_error());
		}

		$query = "select * from pruebas";
		$resultado = mysqli_query($conn, $query);

		if (mysqli_num_rows($resultado) > 0) {
			while ($fila = mysqli_fetch_assoc($resultado)) {
				echo "El ID es: " . $fila["ID"] . ". La edad es " . $fila["Edad"] . ". La altura es:" . $fila["Altura"] . ". Y el nombre es " . $fila["Nombre"] . "<br>";
			}
		}else{
			echo "No se han encontrado los datos";
		}

		mysqli_close($conn);
?>