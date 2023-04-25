<?php

//importa o arquivo de conexão 
require_once "../conexao.php"; 

//cria uma variável com um comando SQL
$SQL = "INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES ('Clara Hohne', 'admin123', '123');";

//prepara o comando para ser executado no mySQL
$comando = $conexao->prepare($SQL); 

//executa o comando
$comando->execute(); 

?>