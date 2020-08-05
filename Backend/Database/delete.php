<?php  include_once 'connection.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

$sql = "DELETE FROM `tasks` WHERE id = $id";
$query = mysqli_query($conecta, $sql);

if (!$query) {
    echo ("Error no Servidor ao Deletar!");
} else {
    header("location:../../Frontend/tasks.php");
}
?>