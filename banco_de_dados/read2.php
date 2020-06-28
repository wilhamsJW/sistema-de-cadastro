<?php include_once 'conexao.php'; ?>
<?php session_start();  //inicialição var de sessão ?>

<?php 
  //verificação de email e senha
  if( isset($_POST["email"])) {

    $email  = $_POST["email"];
    $senha = $_POST["senha"];

    $login = "SELECT * "; //o asterico te permite pegar todos os dados no banco de dados de todas as tabelas
    $login .= " FROM clientes ";
    $login .= " WHERE email = '{$email}' and senha = '{$senha}'  " ; //enail e senha são campos da tabela do db, $email e $senha são as var criadas q estão recebendo as informações do login no momento q o usuário digita

    $acesso = mysqli_query($conecta, $login); //conectando com o db
    if( !$acesso ) { //verificando se a var acesso está ok
        die("Falha na consulta");
    }

    $informacao = mysqli_fetch_assoc($acesso); //mysqli_fetch_assoc = retorna um array com a base de banco de dados desejada, é usado junto com mysqli_query

    if( empty($informacao) ) { //empty = verifica se a var está vazia
         $mensagem = "Verifique se senha e email estão corretos!"; 
         //header("location: ../login2.php");   
    } else {
        //Rotina de saudação foi iniciada aqui pq a var $informacao tem todo o acesso ao banco de dados
         $_SESSION["user"] = $informacao["name"]; 
         header("location: minhatarefa1.php");   
    }

}

?>
