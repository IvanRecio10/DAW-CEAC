<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha Contacto</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body> 
    <?php 

        //Recogemos el cod de la persona en la que hemos pinchado y que nos pasa por la url
        if(isset($_GET['cod_contacto'])){
            extract($_GET); 
            
            $ruta = "media/img/". $foto;
            $rutaError = "media/img/error.jpg";
            echo "<section class='tarjetaAlumno'>";

                if(file_exists($ruta)){
                    echo "<img class='imagen_mostrada' src='$ruta'>";
                }else if(file_exists($rutaError)){
                    echo "<img class='imagen_mostrada' src='$rutaError'>";
                }
                echo "<p>Nombre: $nombre</p>";
                echo "<p>Apellidos: $apellidos</p>";
                echo "<p>Mail: $mail</p>";
                echo "<p>Teléfono: $telefono</p>";
                echo "<p>Observaciones: $observaciones</p>";
                echo "<a href='mostrar_contactos.php' class='boton_volver'>Volver a Contactos</a>";
            echo "</section>";
        }
        
    ?>
</body>
</html>