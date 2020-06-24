<?php include_once 'banco_de_dados/conexao.php' ?>

<?php 
    //var de sessão
    session_start();    

    if( isset($_POST["email"])) {

        $email  = $_POST["email"];
        $senha = $_POST["senha"];

        $login = "SELECT * ";
        $login .= "FROM clientes ";
        $login .= " WHERE email = '{$email}' and senha = '{$senha}'  " ;

        $acesso = mysqli_query($conecta, $login);
        if( !$acesso ) {
            die("Falha na consulta");
        }

        $informacao = mysqli_fetch_assoc($acesso);

        if( empty($informacao) ) {
             $mensagem = "Login sem sucesso";   
        } else {
            $_SESSION["user_portal"] = $informacao["id"];
             header("location: minhatarefa.php");   
        }

    }

?>