<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>

    <div class="formulario">
        <form action="añadirContacto.php" method="post" enctype="multipart/form-data">
            <label>Nombre</label>
            <input type="text" name="nombre"  required>
            <label>Apellidos</label>
            <input type="text" name="apellidos" required>
            <label>Correo Electronico</label>
            <input type="mail" name="mail" required>
            <label>Teléfono</label>
            <input type="text" name="telefono" pattern=[6/9]{1}[0-9]{8} required>
            <label>Foto</label>
            <input type="file" name="archivo">
            <label>Observaciones</label>
            <textarea name="observaciones"></textarea>
            <input class="boton" type="submit" name="enviar" value="Añadir Contacto">
        </form>
    </div>

    <?php

        try{
            //Comprobamos que la conexion con la BBDD es correcta
            require('conexion_agenda.php');
        }catch(Throwable $t){
            echo "--------------------";
            echo "Mensaje : ". $t->getMessage();
        }
            
        try{
            //1.- Conexion con la BBDD
            if($conexion = mysqli_connect($servidor, $usuario, $passwd, $bbdd)){
                mysqli_query($conexion, "SET NAMES 'UTF8'");
                //2.- Seleccionamos la bbdd
                if(mysqli_select_db($conexion, $bbdd)){
                    //3.- Definimos la consulta para añadir los datos
                    if(isset($_POST['enviar'])){
                        //Extraemos los datos que nos llegan desde el formulario
                        extract($_POST);
                        if(!empty($_FILES['archivo']['name'])) {
                            $archivo = $_FILES['archivo']['tmp_name'];
                            $ruta = "media/img/" . $_FILES['archivo']['name'];
                            $tipo = $_FILES['archivo']['type'];
                            $size = $_FILES['archivo']['size'];
                            //Comporbamos que el archivo sea tipo .jpg y que el tamaño sea correcto
                            if(!file_exists($ruta)){
                                if(($tipo == "image/jpeg" || $tipo == "image/jpg") && $size <= ((1024**2)*5)){                    
                                    if(move_uploaded_file($archivo, $ruta)){
                                        $foto = $_FILES['archivo']['name'];
                                    }else{
                                        $foto = "nd";
                                        echo "<p class='borrado'>El archivo no se ha subido correctamente</p>";
                                    }
                                }else{
                                    $foto = "nd";
                                    echo "<p class='borrado'>La imagen no tiene el tamaño o la extension correcta</p>";
                                }
                            }else{
                                $foto = $_FILES['archivo']['name'];
                                echo "<p class='borrado'>La imagen seleccionada ya existe</p>";
                            }
                        }else{
                            $foto = "nd";
                            echo "<p class='borrado'>No has seleccionado ninguna imagen</p>";
                        }
                        $consulta = "INSERT INTO `contactos`(`nombre`, `apellidos`, `mail`, `telefono`, `observaciones`, `foto`) VALUES ('$nombre','$apellidos','$mail','$telefono','$observaciones', '$foto');";
                        if(mysqli_query($conexion, $consulta)){
                            header("location:mostrar_contactos.php");
                        }else{
                            echo "<p>Ha habido un error con la conuslta</p>";
                        }    
                    }

                }
                mysqli_close($conexion);      
            }
        }catch(misqli_sql_exception $mse){
            echo "Numero del error " . $mse-> getError();
            echo "Mensaje del error " . $mse->getMessage();
        }

    ?>

</body>
</html>