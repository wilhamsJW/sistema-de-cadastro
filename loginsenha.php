<?php include_once 'banco_de_dados/conexao.php'; ?>
<?php session_start();   ?>

<?php 

    if( isset($_POST["email"])) {

        $email  = $_POST["email"];
        $senha = $_POST["senha"];

        $login = "SELECT * "; //o asterico te permite pegar todos os dados no banco de dados de todas as tabelas
        $login .= "FROM clientes ";
        $login .= " WHERE email = '{$email}' and senha = '{$senha}'  " ; //enail e senha são campos da tabela do db, $email e $senha são as var criadas q estão recebendo as informações do login no momento q o usuário digita

        $acesso = mysqli_query($conecta, $login); //conectando com o db
        if( !$acesso ) { //verificando se a var acesso está ok
            die("Falha na consulta");
        }

        $informacao = mysqli_fetch_assoc($acesso); //mysqli_fetch_assoc = retorna um array com a base de banco de dados desejada, é usado junto com mysqli_query

        if( empty($informacao) ) { //empty = verifica se a var está vazia
             $mensagem = "Login sem sucesso";   
        } else {
            $_SESSION["user"] = $informacao["nome"]; //$informacao tem todo o acesso ao banco de dados
             header("location: minhatarefa.php");   
        }

    }

?>