<?php
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_POST['idcategoria'];
   $nome = $_POST['nome'];
   $descricao = $_POST['descricao'];
   $cor = $_POST['cor'];
   $ativo = $_POST['ativo'];

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `categoria` SET `nome`= ?, `descricao`= ?, `cor`= ?, `ativo`= ? WHERE  `idcategoria`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("sssii", $nome, $descricao, $cor, $ativo, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







