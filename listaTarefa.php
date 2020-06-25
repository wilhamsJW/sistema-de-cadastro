<?php include_once 'includes/header.php'; session_start(); ?>

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

<div class="container py-5 col-6">
  <div class="border border-primary py-5 row col py-3 px-md-5 my-5">

    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Título</th>
          <th scope="col">Data Incial</th>
          <th scope="col">Data Final</th>
          <th scope="col">Descrição</th>
          <th scope="col">Status</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
        //falta terminar
        if (isset($arrayList) && !empty($arrayList)) {
          foreach ($arrayList as $task) {
        ?>
            <tr>
              <td><?php echo $task['title'] ?></td>
              <td><?php echo $task['start_date'] ?></td>
              <td><?php echo $task['last_date'] ?></td>
              <td><?php echo $task['description'] ?></td>
              <td><?php echo $task['stats'] ?></td>
              <td>EDITAR - REMOVER</td>
            </tr>

        <?php
          }
        }
        ?>

      </tbody>
    </table>
  </div>
</div>