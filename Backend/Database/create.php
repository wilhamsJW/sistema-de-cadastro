<?php
include_once 'connection.php';

// Register User

if (!empty($_POST) and (empty($_POST['nome']) or empty($_POST['email']) or empty($_POST['senha']))) {
    $msg1 = "Preencha todos os campos!";
    //header("location:../Frontend/index.php");
}

if (isset($_POST["nome"])) {

    $nome     = $_POST["nome"];
    $email    = $_POST["email"];
    $senha    = $_POST["senha"];

    $sql = "INSERT INTO users";
    $sql .= "(nome, email, senha ) ";
    $sql .= "VALUES ";
    $sql .= " ('$nome', '$email', '$senha')";

    $query = mysqli_query($conecta, $sql);

    if (!$query) {
        $msg2 = "Opss!!! Este e-mail já está cadastrado!";
    } else {
        $msg3 = "Cadastro realizado com sucesso!";
    }
} //End register user
?>



<!-- Regsiter Tasks -->


<?php
include_once 'connection.php';
//$id_page = $_POST['id_page'];
$id_page = filter_input(INPUT_POST, 'id_page', FILTER_SANITIZE_NUMBER_INT);
if ($id_page == 2) {
  
    if (isset($_POST['title'])) {

        $user_id  = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $title    = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
        $description     = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
        $start_date     = filter_input(INPUT_POST, 'start_date', FILTER_SANITIZE_SPECIAL_CHARS);
        $last_date     = filter_input(INPUT_POST, 'last_date', FILTER_SANITIZE_SPECIAL_CHARS);
        $user    = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
        $stats    = filter_input(INPUT_POST, 'stats', FILTER_SANITIZE_SPECIAL_CHARS);
        

        $sql = "INSERT INTO tasks";
        $sql .= "( user_id, title, description, start_date, last_date, user, stats ) ";
        $sql .= "VALUES ";
        $sql .= " ( '$user_id', '$title', '$description', '$start_date', '$last_date', '$user', '$stats' )";

        $query = mysqli_query($conecta, $sql);

        if (!$query) {
            die("Error no servidor ou dados não conferem!");
        } else {
            $msg5 = "Tarefa criada com sucesso!";
            header("location:../../Frontend/tasks.php");
        }
    }
}
?>