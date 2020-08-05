<?php include_once 'conexao.php'; ?>
<?php session_start();  //inicialição var de sessão ?>

<?php 
  //proteção das páginas para que o usuário não acesse pela url o que vc não quer q ele veja ou seja vc deve proteger todas as páginas após o login
  if ( !isset($_SESSION["id_user"])) {  //o uso do não lógico q é esse ponto de exclamação, verifica se a var não está definida, como realmente ela não vai estar vai ser true 
    header("location:login2.php"); //e redirecionará o usuario pra a página desejada, porém se a var estiver configurada o usuário poderá acessala livremente, o que determina se ela vai tá configurada ou não
  }                               //é justamente a ação do login pq só assim a session entra em ação e passa a ser definida ou setada ou configurada

?>

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
         $_SESSION["id_user"] = $informacao["id"]; 
         header("location: minhatarefa1.php");   
    }

}

?>
