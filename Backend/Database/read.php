<?php
include_once 'connection.php';
session_start();

//$msg = $_POST['msg'];
if (isset($_POST['msg'])) {

    $msg = $_POST['msg'];

    if ($msg == 1) {
        //verficando se os campos estão vazios
        if (!empty($_POST) and (empty($_POST['email']) or empty($_POST['senha']))) {
            $ms = "Opss...! Parece que você não preencheu os campos!";
        }

        //verificação de email e senha
        if (isset($_POST["email"]) && !empty($_POST["senha"])) {

            $email  = $_POST["email"];
            $senha = $_POST["senha"];

            $login = "SELECT * ";
            $login .= " FROM users ";
            $login .= " WHERE email = '{$email}' and senha = '{$senha}'  ";

            $query = mysqli_query($conecta, $login);
            if (!$query) {
                die("Falha na consulta!");
            } else {
                //$ms = "Verifique se senha e email estão corretos!";
                //header("location:../Frontend/login.php");
            }

            $informacao = mysqli_fetch_assoc($query);

            if (empty($informacao)) {
                $mensagem = "Verifique se senha e email estão corretos!";
                //header("location: ../login2.php");   
            } else {
                //Rotina de saudação iniciada aqui
                $_SESSION['user'] = $informacao["nome"];
                $_SESSION['id'] = $informacao["id"];
                header("location:../Frontend/tasks.php");
            }
        }
    }
} 
?>