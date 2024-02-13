<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cajas{
            margin-top: 1em;
            margin: auto;
            background-color: #D5DBDB;
            border: none;
            border-radius: 10px;
            width: 80%;
            text-align: center;
            font-size: 2em;
        }
        div{
            border-radius: 10px;
            width: 8%;
            display: inline-block;
            margin: 1em;
            text-align: center;
        }
        .verde{
            background-color: rgb(60, 166, 60);
        }
        .rojo{
            background-color:rgb(209, 74, 74);
        }
        .caja{
            background-color: #D5DBDB;
            border: none;
        }

    </style>
</head>
<body>
    
<!--| Ejercicio de los presos |-->
    
    <?php    
        /*
            Tengo 100 presos y 100 cajas qu cada caja contiene un numero aleatorio.
            El numero del preso tiene que coincidir con el numero que contiene la caja.
            El preso n1 abrira la caja n1 y el numero que haya dentro de la caja sera el siguiente numero de caja que abrira hasta que salga su numero. Si de los 100 presos hay alguno que hace mas de 50 intentos para conseguir su numero no seran libres.

            Creamos una lista del 1-100 que esten ordenados aleatoriamente.
            Creamos un bucle del 1-100 que seran los presos.
            Cuando entre el preso abrira la caja con la posicion 1. Y si el contenido es igual a su id parara, si no la posicion sera el numero que habia en la caja.

        */
        echo "<p class='cajas'>Juego de los prisioneros</p>";

        //1.- Creamos la lista aleatoria de los numeros que contendra cada caja.
        $listaNumeros = [];
        for ($i =1; $i < 101; $i++){
            array_push($listaNumeros, $i);
        }
        shuffle($listaNumeros);
    
        //2.- Ahora empezamos con el juego de los presos.
        //Primero creamos un bucle que recorra los 100 presos, mientras el id del preso sea distinto al numero que hay en la caja el id pasara a ser ese numero que hay en la caja
        for($posicion = 0; $posicion < 100; $posicion++){
            $numPreso = $posicion + 1;
            $intentos = 1;
            //Comprobamos que el numero que hay dentro de la caja del preso no sea el mismo que el de su identificación. Si no es el mismo numero entonces le sumamos un intento y hacemos que la posicion sea el numero que habia dentro de la caja.
            while($numPreso != $listaNumeros[$posicion]){
                $posicion = $listaNumeros[$posicion] -1;
                $intentos++;
            }
            $posicion = $numPreso -1;
            //Pintamos el feedback para saber si lo ha sacado en menos de 50 intentos o no
            if($intentos < 51){
                echo "<div class='verde'><p>P: $numPreso | I: $intentos</p></div>";
            }else{
                echo "<div class='rojo'><p>P: $numPreso | I: $intentos</p></div>";
            }
        }

        echo "<p class='cajas'>Habitacion de las cajas</p>";
    
        for($i= 0; $i <100; $i++){
            $caja = $i + 1;
            echo "<div class='caja'><p>C: $caja = $listaNumeros[$i]</p></div>";
        }
    
    ?>
</body>
</html>