<?php include_once 'conexao.php'; ?>

<?php 
   $id = $_GET['id']; 
   if (isset($_POST["title"])) {

    $title        = $_POST["title"];
    $date_incio   = $_POST["date_incio"];
    $date_end     = $_POST["date_end"];
    $descri       = $_POST["descri"];
    $stats        = $_POST["stats"];

    $sql = " UPDATE  tasks SET title = '$title', date_incio = '$date_incio', date_end = '$date_end', descri = '$descri', stats = '$stats'    WHERE id = $id ";
  
    $result = mysqli_query($conecta, $sql);

    if(!empty($result = mysqli_query($conecta, $sql))){
        header("location:../listaTarefa.php");
    } else {
        echo "Erro na alteração";
    }
    
   }
  

?>