<?php include_once 'includes/header.php';  
   //iniciar a sessão
    session_start(); 
    //unset($_SESSION["usuario"]);
    //session_destroy();?>


<div class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
      <div class="container">
      <a class="navbar-brand" href="#"><img width="200px" height="50px" src="img/logomc2_.jpg"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Cadastro<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login2.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="minhaarea2.php"></a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="listaTarefa.php">Lista de Tarefas</a>
            <?php unset($_SESSION["usuario"]); ?>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li> 
        </ul>
      </div>
      </div>
    </nav>
   </div>


<div class="container py-5 col-6">
<div class="border border-primary py-5 row col py-3 px-md-5 my-5">
<label for="inputEmail3" class="col-form-label">Título</label>
<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Dê um título ao seu projeto" aria-label="Dê um título ao seu projeto" aria-describedby="button-addon2">
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

  <?php 
    if(isset($_SESSION["user_portal"]) ) {
      echo $_SESSION["user_portal"];
    }
  
  ?>

<div class="input-group mb-3">
  <select class="custom-select" ">
    <option selected>Edite seu status</option>
    <option value="1">On-line</option>
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