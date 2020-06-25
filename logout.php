<?php 
    //iniciar a sessão
    session_start();

    //criar a var de sessão
    unset($_SESSION["user"]); //unset — Destrói a variável especificada, dessa forma é imnpossivel q o usuário acesse a página sem estar logado
   
    header('location: index.php');
?>