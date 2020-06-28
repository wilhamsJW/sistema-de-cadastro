<?php include_once 'includes/header.php' ?>
<?php include_once 'banco_de_dados/read.php' ?>






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
            <a class="nav-link" href="minhatarefa1.php">Criar tarefa</a>
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
</div>
<div class="container col-3 py-5">
  <div class="">
<?php 
  //rotina de saudação, a session está sendo configurada no arquivo loginsenha, lá a session obteve acesso ao banco de dados e me retornar o que eu quiser
      if (isset($_SESSION["user"])) {
    ?>
      <label for="inputEmail3" class="col-form-label"><h3><?php echo ' Tarefas de, ' . $_SESSION["user"] . '!' ; ?></h3></label>
   <?php
   }
    ?>
  </div>
</div>

  
<div class="container py-5 col-11">
  
<div class="border border-primary py-5 row col py-3 px-md-5 my-5">

  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Data Inicial</th>
        <th scope="col">Data Final</th>
        <th scope="col">Descrição</th>
        <th scope="col">Status</th>
        <th scope="col">Usuário</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
        
      </tr>
    </thead>
    <tbody>
      <?php
            while($registro =  mysqli_fetch_assoc($acesso)) { 
              $id = $registro['id']; //está me enviando a id pela url do botão delete
          ?>
            <tr> <!--todos esses valores são da tabela no db, estou mostrando eles, está sendo mostrado em uma tabela ao usuário -->             
              <td><?php echo $registro['title'] ?></td>  
              <td><?php echo $registro['date_incio'] ?></td>
              <td><?php echo $registro['date_end'] ?></td>
              <td><?php echo $registro['descri'] ?></td>      
              <td><?php echo $registro['stats'] ?></td>  
              <td><?php echo $_SESSION["user"] ?></td>
              <!--Button Edit-->
              <td>
              <a href="modal.php?id=<?php echo $id ?>"  style="color:blue" ><button class="btn btn-outline-primary"><i class="fas fa-edit"></i></button></a>
              </td>  
              <!--Button Delete-->
              <td>
              <a href="banco_de_dados/delete.php?id=<?php echo $id ?>" style="color:tomato" ><button class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button></a>
              </td> 


              <!--&nbsp; isto é um código q seria usado dentro dos ícones do botão caso eu colocasse um nome no botão e ícone, 
              esse código evitaria ficar o ícone e o nome colados
              O caractere &nbsp; "Non-breaking space" apesar de não ser visualizado pelo leitor tem uma função importante em HTML. 
              Como o nome do caractere diz "espaço sem quebra" é utilizado para: Preencher um espaço vazio (sem conteúdo) de uma tag HTML.  -->

      <?php
        }
      ?>
      
    </tbody>
  </table>



</div>
</div>