<?php include_once 'conexao.php'; ?>

<?php 
   if (isset($_POST["title"])) {
    $title = $_POST["title"];
    $start_date   = $_POST["start_date"];
    $last_date    = $_POST["last_date"];
    $description  = $_POST["description"];
    $stats        = $_POST["stats"];

    $sql = " UPDATE tasks SET ";
    $sql .= " ( title, start_date, last_date, description, stats  )";
    $sql .= " VALUES ";
    $sql .= " ( '$title', '$start_date', ' $last_date', '$description', '$stats' ) ";
    $sql .= "  WHERE id = 5   ";
    

    $result = mysqli_query($conecta, $sql);

    if(!empty($result = mysqli_query($conecta, $sql))){
        header("location:../minhatarefa1.php");
    } else {
        echo "Erro na alteração";
    }
    
   }
  

?>