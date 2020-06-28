<?php 
  session_start(); //está sendo startada em todas as páginas q tiver o header
 
  $_SESSION["user"] = "porta1" ; //a session é uma var que navega entre as páginas, sempre q for usar ela tem q startar ela, asim:session_start();
                                //esses nomes user e porta1 são nomes dados q podem ser mudadados pelo programador, 
                               //a session pode ser usada para fazer uma saudação ao usuário, se vc concetar ela ao db pra q ela possa ter acesso ao db
                              //a session tbm é responsável pelo logout, pois p logout é justamente quebrar a session ou destrui-la  
                            
?>
