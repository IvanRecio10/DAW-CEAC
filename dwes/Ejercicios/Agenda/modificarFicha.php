<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>

    <?php
        extract($_GET);
        
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
                            //3.- Definimos la consulta para editar los datos.
                            if(isset($_POST['editar'])){
                                extract($_POST);
                                if(!empty($_FILES['archivo']['name'])){
                                    extract($_FILES);
                                    $archivos = $archivo['tmp_name'];
                                    $ruta = "media/img/" .$archivo['name'];
                                    $tipo = $archivo['type'];
                                    $size = $archivo['size'];
                                    //Comporbamos que el archivo sea tipo .jpg y que el tamaño sea correcto
                                    if(!file_exists($ruta)){
                                        if(($tipo == "image/jpeg" || $tipo == "image/jpg") && $size <= ((1024**2)*5)){                    
                                            if(move_uploaded_file($archivos, $ruta)){
                                                $foto = $_FILES['archivo']['name'];
                                            }else{
                                                echo "<p class='borrado'>El archivo no se ha subido correctamente</p>";
                                                $foto = "nd";
                                            }
                                        }else{
                                            $foto = "nd";
                                            echo "<p class='borrado'>La imagen no tiene el tamaño o la extension correcta</p>";
                                        }
                                    }else{
                                        $foto = $_FILES['archivo']['name'];
                                        echo "<p class='borrado'>La imagen seleccionada ya existe</p>";
                                    }
                                    $consulta = "UPDATE contactos SET nombre = '$nombre', apellidos = '$apellidos', mail = '$mail', telefono = '$telefono', observaciones = '$observaciones', foto = '$foto' WHERE cod_contacto = '$cod_contacto'";
                                }else{
                                    $consulta = "UPDATE contactos SET nombre = '$nombre', apellidos = '$apellidos', mail = '$mail', telefono = '$telefono', observaciones = '$observaciones' WHERE cod_contacto = '$cod_contacto'";
                                    echo "<p class='borrado'>No has seleccionado ninguna imagen</p>";
                                }
                                
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
                
                echo "<div class='formulario'>
                            <form action='modificarFicha.php' method='post' enctype='multipart/form-data'>
                                <label>Nombre</label>
                                <input type='text' name='nombre' value='$nombre' required>
                                <label>Apellidos</label>
                                <input type='text' name='apellidos' value='$apellidos' required>
                                <label>Correo Electronico</label>
                                <input type='mail' name='mail' value='$mail' required>
                                <label>Teléfono</label>
                                <input type='text' name='telefono' value='$telefono' required>
                                <label>Foto</label>
                                <input type='file' name='archivo'>
                                <label>Observaciones</label>
                                <textarea name='observaciones'>$observaciones</textarea>
                                <input type='hidden' name='cod_contacto' value='$cod_contacto'>
                                <input class='boton' type='submit' name='editar' value='Editar Contacto'>
                            </form>
                        </div>";
    ?>
</body>
</html>