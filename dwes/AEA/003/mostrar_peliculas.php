<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iván Recio Heras AEA3</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    
    <?php 
    
		try {
			require("conexion_bbdd.php");
		} catch (Throwable $t) {
			echo "--------------------";
			echo "Mensaje : ". $t->getMessage();
		}

		try {
			echo "<h1>CARTELERA</h1>";
			//1.- Ejecutamos la conexion con la bbdd
			if ($conexion = mysqli_connect($servidor, $usuario, $passwd, $bbdd)){
				mysqli_query($conexion, "SET NAMES 'UTF8'");
				//Seleccionamos la BBDD
				if(mysqli_select_db($conexion, $bbdd)){
					//Vamos a definir la consulta.
					extract($_GET);
					if(isset($opcion)){
						if($opcion == 1){
							$consulta = "SELECT * FROM `peliculas` ORDER BY titulo DESC;";
						}else if($opcion ==2){
							$consulta = "SELECT * FROM `peliculas` ORDER BY fecha DESC;";
						}else if($opcion == 3){
							$consulta = "SELECT * FROM `peliculas` ORDER BY titulo;";
						}
					}else{
						$consulta = "SELECT * FROM `peliculas` ORDER BY titulo;";
					}
					$resultado = mysqli_query($conexion, $consulta);
					echo "<div class='botones'>";
						echo "<a class='botonCambio me-3' href='mostrar_peliculas.php?opcion=3'>Ordenar de la A-Z</a>";
						echo "<a class='botonCambio me-3' href='mostrar_peliculas.php?opcion=1'>Ordenar de la Z-A</a>";
						echo "<a class='botonCambio' href='mostrar_peliculas.php?opcion=2'>Ordenar por fecha</a>";
					echo "</div>";
					echo "<div class='contenido justify-content-center row'>";
					while ($fila = mysqli_fetch_array($resultado)){
						echo "<div class='pelicula col-3 justify-content-center'>";
							$ruta = substr($fila['foto'], 3);
							$rutaError = "media/img/peliculas/no_disponible.png";
							echo "<h4>$fila[titulo]</h4>";
							echo "<small>($fila[fecha])</small>";
							if(file_exists($ruta)){
								echo "<img class='imagenPelicula' src='$ruta'>";
							}else if(file_exists($rutaError)){
								echo "<img class='imagenPelicula' src='$rutaError'>";
							}
							echo "<a class='boton' href='mostrar_ficha.php?cod_pelicula=$fila[cod_pelicula]'>Ver Más</a>";
						echo "</div>";
					}
				}
			}
		}catch(misqli_sql_exception $mse){
			echo "Numero del error " . $mse-> getError();
			echo "Mensaje del error " . $mse->getMessage();
		}
    
    ?>

	<script>



	</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

