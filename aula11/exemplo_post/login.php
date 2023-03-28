<h1>Login</h1>

<?php
    //se existe/foi enviada a variável do usuário
    if(isset($_POST["usuario"]))
    //verfica se o usuário é igual a dmin e a senha igual a 123
    if($_POST["user"] == "admin" && $_POST["senha"] == "123"){
        echo "válido - usuário logado";
    }else{
        echo "usuário ou senha inválidos";
    }else{
        //manda abrir outro arquivo, o formulário de login
        //caso o usuário tente abrir esse arquivo pela URL
        //sem acessar o form de login "redirecionamento"
        header("location: form_login.html")
    }
?>

