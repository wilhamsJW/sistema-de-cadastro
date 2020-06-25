<?php include_once 'banco_de_dados/conexao.php' ?>

<?php
   
    //Atualização na tela do usuário e no db
    if( isset($_POST["title"])) {

        $title  = $_POST["title"];

        $sql = "SELECT * ";
        $sql .= " FROM tasks ";
        $sql .= " values ";
        $sql .= " WHERE title = '$title' "; 

        $acesso = mysqli_query($conecta, $sql);
        $informacao = mysqli_fetch_assoc($acesso);
    }




   
?>