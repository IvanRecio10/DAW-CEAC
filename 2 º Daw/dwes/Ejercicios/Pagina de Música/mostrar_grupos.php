<?php 

    include("menu.html");

    echo "<div class='div_grupos'>";
    try{
        //Comprobamos que la conexion con la BBDD es correcta
        require("conexionBBDD.php");
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
                $consulta = "SELECT * FROM grupos ORDER BY nombre";
                //4.- Ejecutamos la consulta
                $resultado = mysqli_query($conexion, $consulta);
                echo "<div class='justify-content-center row'>";
                    while($fila = mysqli_fetch_array($resultado)){
                        $ruta = "media/img/grupos/". $fila['foto'];
                        $rutaError = "media/img/grupos/error.jpg";
                        echo "<div class='grupo col-11 col-sm-5 col-md-4 col-lg-3 col-xl-3 col-xxl-2'>";
                            
                            if(file_exists($ruta)){
                                echo "<img class='imagenAlbum' src='$ruta'>";
                            }else if(file_exists($rutaError)){
                                echo "<img src='$rutaError'>";
                            }
                        echo "<a class='nombre_grupo' href='mostrar_albumes.php?nombre=$fila[nombre]&cod_grupo=$fila[cod_grupo]&album_grupo&nacionalidad=$fila[nacionalidad]'>$fila[nombre]</a>";
                        echo "</div>";
                    }
                echo "</div>";
            }
            mysqli_close($conexion);      
        }
    }catch(misqli_sql_exception $mse){
        echo "Numero del error " . $mse-> getError();
        echo "Mensaje del error " . $mse->getMessage();
    }
    echo "</div>";


?>