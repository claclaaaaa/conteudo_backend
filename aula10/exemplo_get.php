<h1>Request Method : GET</h1>

<?php
    var_dump($_GET);
    //http://localhost/3infob/conteudo_backend/aula10/exemplo_get.php?marca=LG&tipo=televisor
    //o ? separa o endereço do arquivo da variável marca (cujo valor é LG)
    //o & separa as duas variáveis (marca, valor LG e tipo, valor televisor)

    $resposta = $_GET["n1"] + $_GET["n2"];
    echo $resposta;
    //http://localhost/3infob/conteudo_backend/aula10/exemplo_get.php?n1=15&n2=20
?>

