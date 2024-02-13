<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Contactos</title>
    <link rel="stylesheet" href="css/estilo.css">


</head>
<body>
    <main>            
        <?php

            echo "<h1>Contactos</h1>";
            //Pintamos un boton para ir a Añadir Ficha
            echo "<div class='añadirFicha'><a class='boton_añadir' href='añadirContacto.php'>Añadir Contacto<i class='fa-solid fa-circle-plus añadir'></i></a></div>";
            $contador = 0;
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
                        //3.- Definimos la consulta
                        $consulta = "SELECT * FROM contactos ORDER BY nombre, apellidos";
                        //4.- Ejecutamos la consulta
                        $resultado = mysqli_query($conexion, $consulta);
                        
                        while($fila = mysqli_fetch_array($resultado)){
                            $contador++;
                            $ruta = "media/img/". $fila['foto'];
                            $rutaError = "media/img/error.jpg";
                            if($contador % 2 == 0){
                                echo "<section class='par'>";
                            }else{
                                echo "<section class='impar'>";
                            }

                            if(file_exists($ruta)){
                                echo "<img class='imagen_usuario' src='$ruta'>";
                            }else if(file_exists($rutaError)){
                                echo "<img class='imagen_usuario' src='$rutaError'>";
                            }
                            echo "<p class='tabla'><a href='mostrar_ficha.php?cod_contacto=$fila[cod_contacto]&nombre=$fila[nombre]&apellidos=$fila[apellidos]&mail=$fila[mail]&telefono=$fila[telefono]&observaciones=$fila[observaciones]&foto=$fila[foto]'>$fila[nombre] $fila[apellidos]</a></p><div class='iconos'><a href='modificarFicha.php?cod_contacto=$fila[cod_contacto]&nombre=$fila[nombre]&apellidos=$fila[apellidos]&mail=$fila[mail]&telefono=$fila[telefono]&observaciones=$fila[observaciones]&foto=$fila[foto]'><i class='fa-solid fa-pen'></i></a><i class='fa-regular fa-circle-question'></i><a class='papelera' onclick='borrarContacto($fila[cod_contacto], \"$fila[nombre] $fila[apellidos]\")'><i class='fa-solid fa-trash'></i></a></div>";

                            echo "</section>";
                        }
                    }
                    mysqli_close($conexion);      
                }
            }catch(misqli_sql_exception $mse){
                echo "Numero del error " . $mse-> getError();
                echo "Mensaje del error " . $mse->getMessage();
            }


        ?>
    </main>
        <script src="https://kit.fontawesome.com/49d97e010e.js" crossorigin="anonymous"></script>
        <script src="js/borrar.js"></script>
</body>
</html>