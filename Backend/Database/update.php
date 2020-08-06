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

<?php
 //include_once 'connection.php';

if (isset($_POST['code'])) {

    $code = filter_input(INPUT_POST, 'code', FILTER_SANITIZE_NUMBER_INT);
    if ($code == 1) {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $sql = "UPDATE `users` SET `nome`='$nome' WHERE id = $id ";
        $query = mysqli_query($conecta, $sql);
        if (!$query) {
            echo "Erro na alteração";
        } else {
            header("location:../../Frontend/settings.php");
            $messeger = "Ok tudoc ertp";
        }
    }
}

if (isset($_POST['cod'])) {

    $cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_NUMBER_INT);
    if ($cod == 2) {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
        $sql = "UPDATE `users` SET `email`='$email' WHERE id = $id ";
        $query = mysqli_query($conecta, $sql);
        if (!$query) {
            echo "Erro na alteração!";
        }
    }
}

if (isset($_POST['co'])) {

    $co = filter_input(INPUT_POST, 'co', FILTER_SANITIZE_NUMBER_INT);
    if ($co == 3) {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
        $sql = "UPDATE `users` SET `senha`='$senha' WHERE id = $id ";
        $query = mysqli_query($conecta, $sql);
        if (!$query) {
            echo "Erro na alteração!";
        }
    }
}
?>