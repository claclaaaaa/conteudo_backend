<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   if(isset($_GET['id'])){

   $id = $_GET['id'];

   //cria uma variável com um comando SQL
   $SQL = "SELECT * FROM `categoria` WHERE  `idcategoria`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //diz qual valor vai ser colocado no lugar do ?
   $comando->bind_param("i", $id);

   //executa o comando
   $comando->execute();

   //pegar os resultados da consulta
   $resultados = $comando->get_result(); 

   //pega a primeira linha do resultado da consulta
   $categoria = $resultados->fetch_object();


}

