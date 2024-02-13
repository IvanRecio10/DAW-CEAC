<?php 

    include("menu.html");
    echo "<div class='div_grupos margen_arriba'>";
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
                if(isset($_GET['canciones'])){
                    extract($_GET);
                    echo "<div class='centrado row justify-content-center'>";
                        $consulta = "SELECT titulo, portada FROM albumes WHERE cod_album = $cod_album ORDER BY titulo";
                        $resultado = mysqli_query($conexion, $consulta);
                        while($fila = mysqli_fetch_array($resultado)){
                            $foto = "media/img/albumes/". $fila['portada'];
                            echo "<div class='imagen_album_grande col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 col-xxl-4 row'><h2 class='col-12'>$fila[titulo]</h2><img class='col-6 col-lg-3 col-xl-4 col-xxl-6' src='$foto'></div>";
                        }
                        $consulta = "SELECT * FROM canciones WHERE cod_album = $cod_album ORDER BY num_pista";
                        //4.- Ejecutamos la consulta
                        $resultado = mysqli_query($conexion, $consulta);
                        $contador = 0;
                        echo "<div class='div_canciones mt-5 col-11 col-sm-11 col-md-9 col-lg-11 col-xxl-7'>";
                        while($fila = mysqli_fetch_array($resultado)){
                            $contador++;
                            if($contador % 2 == 0){
                                echo "<section class='par row'>";
                            }else{
                                echo "<section class='impar row'>";
                            }
                            $duracion = substr($fila['duracion'], 3);
                            echo "<p class='col-10 tabla'>$fila[num_pista]: $fila[titulo]</p><p class='col-1 tabla'>$duracion</p>";
                            echo "</section>";
                        }
                        echo "</div>";
                    echo "</div>";
                }else{
                    if(isset($_GET['buscar'])){
                        extract($_GET);
                        echo "<div class='row div_cancionesXAlbumes'>";
                        $valor =  "%" . $valorTexto . "%";
                        $consulta = "SELECT * FROM albumes WHERE cod_grupo = (SELECT cod_grupo FROM grupos WHERE nombre = '$grupo');";
                        $resultado =  mysqli_query($conexion, $consulta);
                        while($fila  = mysqli_fetch_array($resultado)){
                            $codigoAlbum = $fila['cod_album'];
                            $foto = "media/img/albumes/". $fila['portada'];
                            echo "<div class='row col-11 col-sm-9 col-md-8 col-lg-5 col-xxl-5 mt-5'>";
                            echo "<div class='imagen_album_grande col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 row'><h2 class='col-12'>$fila[titulo]</h2><img class='col-6 col-lg-3 col-xl-4 col-xxl-3' src='$foto'></div>";
                            $consulta2 = "SELECT * FROM canciones WHERE cod_album = '$codigoAlbum'AND titulo LIKE '$valor';";
                            $resultado2 = mysqli_query($conexion, $consulta2);
                                $contador = 0;
                                echo "<div class='div_canciones mt-3'>";
                                while($fila2 = mysqli_fetch_array($resultado2)){
                                    $contador++;
                                    if($contador % 2 == 0){
                                        echo "<section class='par buscadas row'>";
                                    }else{
                                        echo "<section class='impar buscadas row'>";
                                    }
                                    $duracion = substr($fila2['duracion'], 3);
                                    echo "<p class='col-10 tabla ms-2'>$fila2[num_pista]: $fila2[titulo]</p><p class='col-1 tabla'>$duracion</p>";
                                    echo "</section>";
                                }
                                echo "</div>";
                            echo "</div>";
                        }
                        echo "</div>";
                    }else{
                        echo "<div class='botones_busqueda'>";
                            echo "<label>Titulo</label><input type='text' name='titulo' class='titulo_buscador' id='texto'>";
                            echo "<label class='ms-5'>Grupo</label><select class='desplegable' id='grupos'><option value='0'>Elige un grupo</option>";
                                $consulta = "SELECT * FROM grupos";
                                $resultado = mysqli_query($conexion, $consulta);
                                while($fila = mysqli_fetch_array($resultado)){
                                    echo "<option>$fila[nombre]</option>";
                                }
                            echo "</select>";
                            echo "<input type='submit' value='Buscar' class='boton_busqueda' onclick='realizarBusqueda()'>";
                        echo "</div>";
                    }    
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