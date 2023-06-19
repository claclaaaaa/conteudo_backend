<?php
   //importa o arquivo de conexão
   require_once "../banco/conexao.php";

   if(isset($_POST['nome'])){

      //faz upload da foto escolhida
      require_once "faz_upload.php";

   $nome = $_POST['nome'];
   $descricao = $_POST['descricao'];
   $cor = $_POST['cor'];
   $ativo = $_POST['ativo'];      

   //cria uma variável com um comando SQL
   $SQL = "INSERT INTO `categoria` (`nome`, `descricao`, `cor`, `ativo`, foto) VALUES (?, ?, ?, ?, ?);";
 
   //prepara o comando para ser executado no mysql
   $comando = $conexao->prepare($SQL);

   //faz a vinculação dos parâmetros ?, ?, ?
   $comando->bind_param("sssss", $nome, $descricao, $cor, $ativo, $nome_foto);

   //executa o comando
   $comando->execute();

}
   //volta para o formulário
   header("Location: index.php");

   







