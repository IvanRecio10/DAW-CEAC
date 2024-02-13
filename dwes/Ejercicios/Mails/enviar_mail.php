<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['enviar'])){
            extract($_POST);

            $correoDeEntrega = "ivanrh1110@gmail.com";
            $asuntoCorreo = "Correo entregado desde la web";
            $cuerpoDelMensaje = "Alguien ha realizado una consulta desde la web \n";
            $cuerpoDelMensaje .= "---------------------------------------------- \n";
            $cuerpoDelMensaje .= "Nombre: ". $nombre ."\n";
            $cuerpoDelMensaje .= "Telefono: ". $tel ."\n";
            $cuerpoDelMensaje .= "Email: ". $mail ."\n";
            $cuerpoDelMensaje .= "Asunto: ". $asunto ."\n";
            $cuerpoDelMensaje .= "Mensaje: ". $mensaje ."\n";
            $cuerpoDelMensaje .= "------------------------------------------------ \n";

            $cabeceras="MIME-Version: 1.0\r\n";
		    $cabeceras.="Content-Type: text/plain; charset=\"UTF-8\"\r\n";
		    $cabeceras.="Content-Transfer-Encoding: 8bit\r\n";
        
            if(mail($correoDeEntrega, mb_encode_mimeheader($asuntoCorreo), $cuerpoDelMensaje, $cabeceras)){
                $error = 0;
            }else{
                $error = 1;
            }
            header("location:index.php?error=$error");
        }else{
            header("location:index.php");
        }
    ?>
</body>
</html>