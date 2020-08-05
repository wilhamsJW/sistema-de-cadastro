<?php include_once 'connection.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $id          = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
    $title       = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
    $start_date  = filter_input(INPUT_POST, 'start_date', FILTER_SANITIZE_SPECIAL_CHARS);
    $last_date   = filter_input(INPUT_POST, 'last_date', FILTER_SANITIZE_SPECIAL_CHARS);
    $user        = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
    $stats       = filter_input(INPUT_POST, 'stats', FILTER_SANITIZE_SPECIAL_CHARS);
    

    $sql = "UPDATE `tasks` SET `title`='$title', `description`='$description', `start_date`='$start_date', `last_date`='$last_date', `user`='$user', `stats`='$stats' WHERE id = $id";
    $query = mysqli_query($conecta, $sql);

    $info = mysqli_fetch_assoc($query);

    if (!empty($info)) {
        echo "Erro na Alteração!";
        header("location:../../Frontend/edit.php");
    } else {
        echo "Alterado Com Sucesso";
        header("location:../../Frontend/tasks.php");
    }
}

?>