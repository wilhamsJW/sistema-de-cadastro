<?php
include_once 'connection.php';

// Register User
//session_start();

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

//Verificação se o campo tá vazio
if (isset($_POST["title"])) {

    if (!empty($_POST) and (empty($_POST['id']) or empty($_POST['title']) or empty($_POST['description']) or empty($_POST['start_date']) or empty($_POST['last_date']) or empty($_POST['user']) or empty($_POST['stats']) )) {
    }

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
        header("location:../../Frontend/tasks.php");
    }
}
?>