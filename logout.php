<?php 
    //iniciar a sessão
    session_start();

    //criar a var de sessão
    $_SESSION["usuario"] = "users";
   
    header('location: index.php');
?>