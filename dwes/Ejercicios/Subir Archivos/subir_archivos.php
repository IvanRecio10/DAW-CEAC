<?php 

    if(isset($_POST['enviar'])){
        foreach ($_FILES['archivo'] as $propiedad => $valor) {
            echo "<p>Propiedad: " . $propiedad . " Valor: " . $valor . "</p>";
        }
        if(!file_exists("archivos/")){
            mkdir("archivos/", 0777);
        }

        $archivo = $_FILES['archivo']['tmp_name'];
        $tipo = $_FILES['archivo']['type'];
        $size = $_FILES['archivo']['size'];
        $ruta = "archivos/" . $_FILES['archivo']['name'];
        
        if(($tipo == "text/plain" && $size <= (500*1024)) || ($tipo == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" && $size <= (1024**2)) || (($tipo == "application/vnd.openxmlformats-officedocument.wordprocessingml.document" || $tipo == "application/pdf") && $size <= ((1024**2)*2)) || (($tipo == "image/jpeg" || $tipo == "image/jpg") && $size <= ((1024**2)*5))){
            if(!file_exists($ruta)){                    
                if(move_uploaded_file($archivo, $ruta)){
                    echo "OK";
                }else{
                    echo "Error";
                }
            }else{
                echo "<button onclick='cancelar()'>Elija otro archivo</button>";
            }
        }
        
        
    }  
?>
<script src="subir.js"><script>