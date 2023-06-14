<?php
   
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   $id = $_POST['idcategoria'];
   $nome = $_POST['nome'];
   $descricao = $_POST['descricao'];
   $ativo = $_POST['ativo'];
   $cor = password_hash($_POST['cor'], PASSWORD_BCRYPT);

   //cria uma variável com um comando SQL
   $SQL = "UPDATE `categoria` SET `nome`= ?, `descricao`= ?, `cor`= ?, `ativo`= ? WHERE  `idcategoria`= ? ;";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("ssssi", $nome, $descricao, $cor, $ativo, $id);

   //executa o comando
   $comando->execute();

   //volta para o formulário
   header("Location: index.php");

   







