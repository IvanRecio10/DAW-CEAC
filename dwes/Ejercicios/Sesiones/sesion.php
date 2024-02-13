<?php

    session_start();
    if(!$_SESSION['login']){
        session_destroy();
        header("location:login.php");
    }
    if($_SESSION['hora'] + 10 < time()){
        session_destroy();
        header("location:login.php?error=2");
    }
    if(isset($_SESSION['timeout'])){
        $vida_sesion = time() - $_SESSION['timeout'];
        if($vida_sesion > 5){
            session_destroy();
            header("location:login.php?error=3");
        }
    }
    $_SESSION['timeout'] = time()

?>