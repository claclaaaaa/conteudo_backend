<h1>Login</h1>

<?php
    if($_GET["user"] == "admin" && $_GET["senha"] == "123"){
        echo "válido - usuário logado";
    }else{
        echo "inválido";
    }

?>

