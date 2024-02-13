<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mails</title>
</head>
<body>
    <form name="formulario" action="enviar_mail.php" method="post" enctype="application/x-www-form.urlencoded">
        <label>Nombre</label>
        <input type="text" name="nombre" autofocus required>

        <label>Telefono</label>
        <input type="text" name="tel" pattern="[0-9]{9}" required>

        <label>Correo Electronico</label>
        <input type="email" name="mail" required>
        
        <label>Asunto</label>
        <input type="text" name="asunto" required>
        
        <label>Mensaje</label>
        <textarea name="mensaje" placeholder="Escriba su Mensaje" required></textarea>  
        
        <div>
            <input type="submit" value="Enviar" name="enviar">
            <input type="reset" value="Borrar" name="borrar">
        </div> 

    </form>
        <?php
            if(isset($_GET['error'])){
                $error = $_GET['error'];
                if($error == 0){
                    echo "<p>Hemos recibido su consulta</p>";
                }else{
                    echo "<p>No hemos recibido su consulta</p>";
                }
            }
        ?>
</body>
</html>