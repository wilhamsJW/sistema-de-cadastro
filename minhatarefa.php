<?php include_once 'includes/header.php';
//include_once 'banco_de_dados/create.php';
session_start(); //é obrigatório starta a var session pra poder usala nos arquivos que se quer usar
?>

<?php include_once 'tarefa.init.php'; ?>

<?php 
  //proteção das páginas para que o usuário não acesse pela url o que vc não quer q ele veja ou seja vc deve proteger todas as páginas após o login
  if (!isset($_SESSION["user"])) {  //o uso do não lógico q é esse ponto de exclamação, verifica se a var não está definida, como realmente ela não vai estar vai ser true 
    header("location:login2.php"); //e redirecionará o usuario pra a página desejada, porém se a var estiver configurada o usuário poderá acessala livremente, o que determina se ela vai tá configurada ou não
  }                               //é justamente a ação do login pq só assim a session entra em ação e passa a ser definida ou setada ou configurada
?>
    



<div class="">
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#"><img width="200px" height="50px" src="img/logomc2_.jpg"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="minhatarefa.php">Editar tarefa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="minhaarea2.php"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listaTarefa.php">Lista de Tarefas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<form action="minhatarefa.php" method="POST">
<div class="container py-5 col-6">
  <div class="border border-primary py-5 row col py-3 px-md-5 my-5">
  <div class="container">

  <?php 
  //rotina de saudação, a session está sendo configurada no arquivo loginsenha, lá a session obteve acesso ao banco de dados e me retornar o que eu quiser
      if (isset($_SESSION["user"])) {
    ?>
      <label for="inputEmail3" class="col-form-label"><h3><?php echo ' Bem Vindo, ' . $_SESSION["user"] . '!' ; ?></h3></label>
   <?php
   }
    ?>
  </div>


    <label for="inputEmail3" class="col-form-label"> Título</label>
    <div class="input-group mb-3">
      <input type="text" name="title" class="form-control" placeholder="Dê um título ao seu projeto" aria-label="Dê um título ao seu projeto" aria-describedby="button-addon2">
    </div>
    <label for="inputEmail3" class="col-form-label">Data do ínicio</label>
    <div class="input-group mb-3">
      <input type="date" class="form-control" placeholder="Insira a data" aria-label="Insira a data" aria-describedby="button-addon2">
    </div>
    <label for="inputEmail3" class="col-form-label">Data do término</label>
    <div class="input-group mb-3">
      <input type="date" class="form-control" placeholder="Insira a data" aria-label="Insira a data" aria-describedby="button-addon2">
    </div>

    <form class="was-validated">
      <div class="mb-3">
        <label for="validationTextarea">Descrição</label>
        <textarea class="form-control is-invalid" id="validationTextarea" placeholder="conte-nos sobre seu projeto" required></textarea>
        <!--<div class="invalid-feedback">
      Please enter a message in the textarea.
    </div> -->
      </div>
       <div class="input-group mb-3">
        <select class="custom-select" ">
    <option selected>Edite seu status</option>
    <option value=" 1">On-line</option>
          <option value="2">Ausente</option>
          <option value="3">Ocupado</option>
        </select>
        <div class="input-group-append">
          <label class="input-group-text" for="inputGroupSelect02">Status</label>
        </div>
      </div>
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Salvar</button>
      </div>

  </div>
</div>
</form>