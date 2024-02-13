<?php 
    try{
        //Comprobamos que la conexion con la BBDD es correcta
        require('conexion_agenda.php');
    }catch(Throwable $t){
        echo "--------------------";
        echo "Mensaje : ". $t->getMessage();
    }

    try{
        if($conexion = mysqli_connect($servidor, $usuario, $passwd, $bbdd)){
            mysqli_query($conexion, "SET NAMES 'UTF8'");
            //2.- Seleccionamos la bbdd
            if(mysqli_select_db($conexion, $bbdd)){
                //3.- Definimos la consulta
                if(isset($_GET['borrar'])){
                    extract($_GET);
                    $consulta = "DELETE FROM `contactos` WHERE `cod_contacto` = $cod_contacto;";
                    if(mysqli_query($conexion, $consulta)){
                        header("location:mostrar_contactos.php");
                        echo "<p class='borrado'>El usuario se ha borrado correctamente</p>";
                    }else{
                        echo "<p>Ha habido un error con la conuslta</p>";
                    }  
                }
            }
        }
            mysqli_close($conexion);      
        
    }catch(misqli_sql_exception $mse){
        echo "Numero del error " . $mse-> getError();
        echo "Mensaje del error " . $mse->getMessage();
    }
    

?>