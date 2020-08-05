<?php include_once 'conexao.php' ?>

<?php

//inserção no banco de dados
if (isset($_POST["name"])) {
    //print_r($_POST);//apenas pra visualzar se as informações estão sendo enviadas
    $name     = $_POST["name"];
    $email    = $_POST["email"];
    $senha2    = $_POST["senha2"];
    

    $inserir = "INSERT INTO clientes"; //lembre-se q esses espaços no final são importantes pq este .= se trata de uma concatenação
    $inserir .= "(name, email, senha ) "; //coluna criada no db na tabela clientes
    $inserir .= "VALUES ";
    $inserir .= "('$name', '$email', '$senha2')"; //var q guardam os valores do usuário

    $operacao_inserir = mysqli_query($conecta, $inserir);//conecta com o db, $operacao_inserir = agora tem acesso ao db 
    
    $icrement = mysqli_fetch_assoc($operacao_inserir);
    $id_user = $icrement["id"];
     
    
    if (!$operacao_inserir) {
        die("Error no banco de dados ou email já cadastrado");
      
    } else {
        header("location:../login2.php");
    }

}

//inserção no db do arquivo minhatarefa1.php

if( isset($_POST["title"])) {

    $title        = $_POST["title"];
    $date_incio   = $_POST["date_incio"];
    $date_end     = $_POST["date_end"];
    $descri       = $_POST["descri"];
    $stats        = $_POST["stats"];

    $sql = "INSERT INTO tasks ";
    $sql .= " ( title, date_incio, date_end, descri, stats )"; //coluna da tabela tasks
    $sql .= " VALUES ";
    $sql .= " ( '$title', '$date_incio', ' $date_end', '$descri', '$stats' ) "; //var que contém o valor digitado pelo usuario, essa var foi declarada no html

    
    
    $acesso = mysqli_query($conecta, $sql);   //concetando com o db
    //$assoc = mysqli_fetch_assoc($acesso);   //transformando tudo em um array / $assoc = agora tem autonomia sobre o banco de dados 
    //$acesso =  mysqli_fetch_assoc($tasks); 
    $acesso_oi = mysqli_query($conecta, $_sql);
    if(!$acesso) {
        die("Tarefa não adicionada!");
    } else {
        //$mensagem = "Sua tarefa foi adicionada com sucesso!";
        //$_SESSION["user"] = $assoc["name"]; 
        header("location:../minhatarefa1.php");
    }
}  

?>