<?php include_once 'includes/header.php' ?>
<?php include_once 'includes/menu.php' ?>

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
      if(isset($arrayList) && !empty($arrayList)){
        foreach($arrayList as $task){
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