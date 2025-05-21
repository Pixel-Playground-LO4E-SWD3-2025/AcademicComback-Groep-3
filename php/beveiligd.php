<?php

    session_start();
    if($_SESSION['isLoggedIn'] == true){
        echo "welkom op de ingelogde pagina";
    }else{
        header("Location: login.php");
    }
?>