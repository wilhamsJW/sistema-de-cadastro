<?php include_once 'conexao.php'; ?>
<?php session_start();  //inicialição var de sessão ?>

<?php 
    $consulta = "SELECT * FROM tasks ";          //selecionando tabela tasks
    $acess = mysqli_query($conecta, $consulta); //conectando com o db, $conecta é uma var de conexão com o db, ela foi criada no arquivo conexão

    $sql = "DELETE FROM tasks WHERE id=7";
    $query = mysqli_query($conecta, $sql); //fazendo a query, concetando com o db
    $assoc = mysqli_fetch_assoc($acess);  //transformando $query em um array associativo para poder pegar informações no banco de dados com a var recém criada $assoc
                                      
    if($query = mysqli_query($conecta, $sql)){
       // $_SESSION["user"] = $assoc[""];
        header("location:../listatarefa.php");
    } else { 
        $mensagem = "Error item não excluído";
    }

?>