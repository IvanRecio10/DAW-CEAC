<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivos</title>
    <style>
        *{
            font-family: "Calibri";
        }

        h2{
            text-align: center;
            width: 20%;
            margin: auto;
            padding-top: 1em;
        }
        input{
            padding: 1em;
            display: block;
            margin: auto;
            margin-top: 2em;
        }
        input[type='submit']{
            margin-bottom: .5em;
            border: none;
            border-radius: 10px;
            background-color: rgb(226, 211, 192);
        }
        input[type='submit']:hover{
            transition: .5s;
            background-color: rgb(199, 182, 161);
        }
        .form{
            padding-bottom: 1em;
            margin: auto;
            place-items: center;
            text-align: center;
            width: 25%;
            height: 100%;
            border: none;
            border-radius: 10px;
            background-color: bisque;
        }
    </style>
</head>
<body>
    <h2>Subir Archivos</h2>
    <div class="form">
        <form name="formulario" action="subir_archivos.php" method="post" enctype="multipart/form-data">
            <input type="file" name="archivo">
            <input type="submit" name="enviar" value="Subir Archivos">
        </form>
    </div>

</body>
</html>