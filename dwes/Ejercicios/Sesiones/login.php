<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            font-family: 'Calibri';
        }
        label{
            display: block;
            margin-top: 1em;
        }
        .botones{
            margin-top: 1em;
        }
    </style>

</head>
<body>
    <h1>Validacion de usuario (Sesiones)</h1>

    <form action="validacion.php" method="post" enctype="application/x-www-form-urlencoded">
        <label>Usuario</label>
        <input type="text" name="usuario" autofocus required>
        <label>Contraseña</label>
        <input type="password" name="pass" required>
        <div class="botones">
            <input type="submit" value="Enviar" name="enviar">
            <input type="reset" value="Borrar" name="borrar">
        </div>
    </form>
 
    <?php 
    
        if(isset($_GET['error'])){
            switch ($_GET['error']) {
                case 1:
                    echo "<p>El usuario o contraseña es incorrecto</p>";
                    break;
                case 2: 
                    echo "<p>La sesion ha caducado</p>";
                    break;
                case 3:
                    echo "<p>La sesion ha caducado por inactividad</p>";
            }     
        }
    
    ?>
</body>
</html>