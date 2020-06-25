<?php 
    
$utf8 = header("Content-Type: text/html; charset=utf-8");
$conecta = new mysqli('localhost', 'root', '', 'registro');
$conecta->set_charset('utf8');








/*
  $servidor = "localhost";
  $usuario = "root";
  $banco = "login";
  $senha = "";
  $conecta = mysqli_connect($servidor, $usuario, $banco, $senha);

  //Passo 5 -> Testando conexão com banco de dados
  if ( mysqli_connect_errno() ) {
      die("Conexão Falhou: " . mysqli_connect_errno() ); //die = matar a conexão
      
  }
  */
