<?php include_once 'conexao.php'; ?>
<?php session_start();  //inicialição var de sessão ?>

<?php 
  //mostrar os dados no browser no arquivo lista tarefa
  $consulta = "SELECT * FROM tasks ";
  $acesso = mysqli_query($conecta, $consulta);
?>

