<?php
//inicia a sessão - deve ser colocada sempre antes de manipular a variável $_SESSION
session_start();

//verifica se existe uma variável chamada $_SESSION com a key usuário
//essa variável é criada no arquivo validar.php quando o usuário digita o login/senha corretos
if(!isset($_SESSION['usuario'])){
    header("Location: ../login/formulario.php");
}

?>