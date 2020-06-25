<?php

include_once 'conexao.php';

//inserção no banco de dados
if (isset($_POST["nome"])) {
    //print_r($_POST);//apenas pra visualzar se as informações estão sendo enviadas
    $nome     = $_POST["nome"];
    $email    = $_POST["email"];
    $senha2    = $_POST["senha2"];


    $inserir = "INSERT INTO clientes"; //lembre-se q esses espaços no final são importantes pq este .= se trata de uma concatenação
    $inserir .= "(nome, email, senha ) "; //coluna criada no db na tabela clientes
    $inserir .= "VALUES ";
    $inserir .= "('$nome', '$email', '$senha2')"; //var q guardam os valores do usuário

    $operacao_inserir = mysqli_query($conecta, $inserir);//conecta com o db, $operacao_inserir = agora tem acesso ao db 

    if (!$operacao_inserir) {
        die("Error no banco de dados ou email já cadastrado");
      
    } else {
        header("location:../login2.php");
    }
}
