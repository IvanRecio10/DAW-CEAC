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
                if(isset($_GET['album_grupo'])){
                    extract($_GET);
                    //Definimos la consulta para cuando venga de la pagina de grupos.
                    $consulta = "SELECT biografia FROM grupos WHERE cod_grupo = $cod_grupo";
                    $resultado = mysqli_query($conexion, $consulta);
                    echo "<h1 class='tituloArtista'>$nombre</h1>";
                    while($fila = mysqli_fetch_array($resultado)){
                        echo "<div class='bio'><p>$fila[biografia]</p>
                        <p>$nacionalidad</p></div>";
                    }
                    
                    $consulta = "SELECT * FROM albumes WHERE cod_grupo = $cod_grupo ORDER BY titulo";
                    //4.- Ejecutamos la consulta
                    $resultado = mysqli_query($conexion, $consulta);
                    while($fila = mysqli_fetch_array($resultado)){
                        $ruta = "media/img/albumes/". $fila['portada'];
                        $rutaError = "media/img/albumes/error.jpg";
                        echo "<div class='grupo col-11 col-sm-5 col-md-4 col-lg-3 col-xl-3 col-xxl-2'>";
                        
                        if(file_exists($ruta)){
                            echo "<img class='imagenAlbum' src='$ruta'>";
                        }else if(file_exists($rutaError)){
                            echo "<img src='$rutaError'>";
                        }
                        echo "<a class='nombre_grupo' href='mostrar_canciones.php?cod_album=$fila[cod_album]&canciones'>$fila[titulo]</a>";
                        echo "</div>";
                        
                    }
                }else if(isset($_GET['genero'])){
                    echo "<div class='busqueda_genero'>";
                    echo "<label class='ms-5'>Genero</label><select onchange='enviarGenero(this)' class='desplegable' id='generos'><option value='0'>Busca por genero</option>";
                    $consulta = "SELECT * FROM generos";
                    $resultado = mysqli_query($conexion, $consulta);
                        while($fila = mysqli_fetch_array($resultado)){
                            echo "<option>$fila[genero]</option>";
                        }
                    echo "</select>";
                    echo "</div>";
                    $genero = $_GET['valor'];
                    $consulta = "SELECT titulo, portada, a.cod_album FROM albumes a, albumes_generos ag WHERE a.cod_album = ag.cod_album AND ag.cod_genero = (SELECT cod_genero FROM generos WHERE genero = '$genero');";
                    $resultado = mysqli_query($conexion, $consulta);

                    echo "<div class='justify-content-center row'>";
                    while($fila = mysqli_fetch_array($resultado)){
                        $ruta = "media/img/albumes/". $fila['portada'];
                        $rutaError = "media/img/albumes/error.jpg";
                        echo "<div class='grupo col-11 col-sm-5 col-md-4 col-lg-3 col-xl-3 col-xxl-2'>";
                            if(file_exists($ruta)){
                                echo "<img class='imagenAlbum' src='$ruta'>";
                            }else if(file_exists($rutaError)){
                                echo "<img src='$rutaError'>";
                            }
                            echo "<a class='nombre_grupo' href='mostrar_canciones.php?cod_album=$fila[cod_album]&canciones'>$fila[titulo]</a>";
                        echo "</div>";
                    }
                    echo "</div>";
                }else{
                    echo "<div class='busqueda_genero'>";
                    echo "<label class='ms-5'>Genero</label><select onchange='enviarGenero(this)' class='desplegable' id='generos'><option value='0'>Busca por genero</option>";
                    $consulta = "SELECT * FROM generos";
                    $resultado = mysqli_query($conexion, $consulta);
                        while($fila = mysqli_fetch_array($resultado)){
                            echo "<option>$fila[genero]</option>";
                        }
                    echo "</select>";
                    echo "</div>";
                    $consulta = "SELECT * FROM albumes ORDER BY titulo";
                    //4.- Ejecutamos la consulta
                    $resultado = mysqli_query($conexion, $consulta);
                    echo "<div class='justify-content-center row'>";
                        while($fila = mysqli_fetch_array($resultado)){
                            $ruta = "media/img/albumes/". $fila['portada'];
                            $rutaError = "media/img/albumes/error.jpg";
                            echo "<div class='grupo col-11 col-sm-5 col-md-4 col-lg-3 col-xl-3 col-xxl-2'>";
                                if(file_exists($ruta)){
                                    echo "<img class='imagenAlbum' src='$ruta'>";
                                }else if(file_exists($rutaError)){
                                    echo "<img src='$rutaError'>";
                                }
                                echo "<a class='nombre_grupo' href='mostrar_canciones.php?cod_album=$fila[cod_album]&canciones'>$fila[titulo]</a>";
                            echo "</div>";
        
                        }
                    echo "</div>";
                }
            }
            mysqli_close($conexion);      
        }
    }catch(misqli_sql_exception $mse){
        echo "Numero del error " . $mse-> getError();
        echo "Mensaje del error " . $mse->getMessage();
    }
    echo "</div>";
?>