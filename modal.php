<?php include_once 'includes/header.php'?>


<!--Menu-->
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
            <a class="nav-link" href="listatarefa.php"><- Voltar para lista de Tarefas</a>
          </li>
         
      
        </ul>
      </div>
    </div>
  </nav>
</div>

<!-- Formulário -->
<?php $id = $_GET['id'];//guardando a id da url, para enviar para update.php para saber qual é a url a ser editada
      echo $id; ?>
<form action="banco_de_dados/update.php?id=<?php echo $id ?>" method="POST">
   <div class="container py-5 col-8">
   <div class="border border-primary py-5 row col py-3 px-md-5 my-5">

   
   <div class="container">
  <?php 
  //rotina de saudação, a session está sendo configurada no arquivo read2.php, lá a session obteve acesso ao banco de dados e me retornar o que eu quiser
      if (isset($_SESSION["user"])) {
    ?>
      <label for="inputEmail3" class="col-form-label"><h3><?php echo ' Bem Vindo, ' . $_SESSION["user"] . '!' ; ?></h3></label>
   <?php
   }
    ?>
  </div>

    <!--Edição do título-->
    <label for="inputEmail3" class="col-form-label"> Título da tarefa</label>
    <div class="input-group mb-3">
      <input type="text" name="title" class="form-control" placeholder="Dê um título ao seu projeto" aria-label="Dê um título ao seu projeto" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Alterar</button>
  </div>
    </div>
  

    <!--Edição da data-->
    <label for="inputEmail3" class="col-form-label">Data do ínicio</label>
    <div class="input-group mb-3">
      <input type="date" name="date_incio" class="form-control" placeholder="Insira a data" aria-label="Insira a data" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Alterar</button>
  </div>
    </div>
    <label for="inputEmail3" class="col-form-label">Data do término</label>
    <div class="input-group mb-3">
      <input type="date" name="date_end" class="form-control" placeholder="Insira a data" aria-label="Insira a data" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Alterar</button>
  </div>
    </div>


    <label for="inputEmail3" class="col-form-label">Descrição</label>
    <div class="input-group mb-3">
      <input type="text" name="descri" class="form-control" placeholder="conte-nos sobre sua tarefa" aria-label="Insira sua tarefa" aria-describedby="button-addon2">
      <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Alterar</button>
  </div>
    </div>

       <!--Edição do status-->
       <div class="input-group mb-3">
        <select name="stats"  class="custom-select" ">
    <option selected>Edite seu status</option>
    <option value=" On-line">On-line</option>
          <option value="Ausente">Ausente</option>
          <option value="Ocupado">Ocupado</option>
          <!--Botôes-->
          <div class="input-group-append">
        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Alterar</button>
  </div>
        </select>
      <div class="input-group-append">
          <label class="input-group-text" for="inputGroupSelect02">Status</label>  
        </div>
      </div>

       <!--Botão-->
     
         <div class="col-lg-12" style="text-align: right;">
            <button class="btn btn-primary" type="submit">Editar</button>
           
          </div>


      
  </div>
</div>

  </div>
</div>
</form>




<?php include_once 'includes/footer.php' ?>