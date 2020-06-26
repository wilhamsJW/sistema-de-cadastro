<?php include_once 'banco_de_dados/conexao.php' ?>

<?php
 
    //inserção no db
    if( isset($_POST["title"])) {

        $title        = $_POST["title"];
        $start_date   = $_POST["start_date"];
        $last_date    = $_POST["last_date"];
        $description  = $_POST["description"];
        $stats        = $_POST["stats"];


        $sql = "INSERT INTO tasks ";
        $sql .= " ( title, start_date, last_date, description, stats  )"; //coluna da tabela tasks
        $sql .= " VALUES ";
        $sql .= " ( '$title', '$start_date', ' $last_date', '$description', '$stats' ) "; //var que contém o valor digitado pelo usuario, essa var foi declarada no html
        

        $acesso = mysqli_query($conecta, $sql);   //concetando com o db
        //$informacao = mysqli_fetch_assoc($acesso); //transformando tudo em um array / $informacao = agora tem autonomia sobre o banco de dados 
        //$acesso =  mysqli_fetch_assoc($tasks);
        if(!$acesso) {
            die("Tarefa não adicionada!");
        } else {
            $mensagem = "Sua tarefa foi adicionada com sucesso!";
        }
    }   
?>