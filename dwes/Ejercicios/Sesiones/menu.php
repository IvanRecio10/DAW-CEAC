<?php 

    require_once("sesion.php");

    echo "<p>Usuario conectado: ".$_SESSION['user']."</p>";
    echo "<a href='archivo_protegido1.php'>Archivo 1</a>";
    echo "<a href='archivo_protegido2.php'>Archivo 2</a>";
    echo "<a href='salir.php'>Salir</a>";



?>