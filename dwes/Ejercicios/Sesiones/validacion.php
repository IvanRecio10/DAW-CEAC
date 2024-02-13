<?php 

    if(isset($_POST['enviar'])){
        if ($_POST['usuario'] == "pepe@gmail.com" && $_POST['pass'] == "1234qwerty" ) {
            //Existe el usuario
            session_start(); 
            $_SESSION["user"] = $_POST['usuario'];
            $_SESSION['login'] = true; //Me vale para saber si la sesion esta vigente
            $_SESSION['hora'] = time(); //Guardamos la hora  la que se ha registrado el inicio de sesion
            header("location:archivo_protegido1.php");
        }else{
            header("location:login.php?error=1");
        }
    }else{
        header("location:login.php");
    }

?> 