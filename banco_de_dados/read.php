<?php include_once 'conexao.php'; ?>
<?php session_start();  //inicialição var de sessão ?>

<?php 
  // selecionando a tabela tasks do do para mostrar os dados no browser no arquivo lista tarefa
  $consulta = "SELECT * FROM tasks limit 5 ";
  $acesso = mysqli_query($conecta, $consulta);
?>