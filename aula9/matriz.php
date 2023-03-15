<h2>Matrizes</h2>
<pre>
São estruturas de dados bidimensionais, onde é necessário 
informar 2 índices para realizar o acesso de um valor.

Na prática consiste de um vetor que armazena outros vetores.
</pre>

<?php
    $produto1 = [
        "nome" => "Câmera",
        "marca" => "LG", 
        "preco" => 2500
    ]; 

    $produto2 = [
        "nome" => "Notebook",
        "marca" => "Dell",
        "preco" => 7500
    ]; 

    $produto3 = [
        "nome" => "Smartphone",
        "marca" => "Samsung",
        "preco" => 3500
    ]; 

    $produtos = [
        $produto1, 
        $produto2, 
        $produto3
    ]; 

    //imprimir todos os valores da matriz utilizando duas estruturas de repetição
    //uma para as linhas e outra para as colunas
    for($i=0; $i<=2; $i++){
        foreach($produtos[$i] as $key => $value){
            echo $value . "<br>";
        }
    }   
    //outra forma

    // th - table head (cabeçalho)
    // tr - table row (coluna)
    // td - table data (dados)
    
    echo "<table border=1>";
    foreach($produtos as $produto){
        echo "<tr>";
            echo "<td>" .  $produto["nome"] . "</td>";
            echo "<td>" .  $produto["marca"] . "</td>";
            echo "<td>" .   $produto["preco"] . "</td>";
        echo "</tr>";

    }
    echo "</table>";
    
     

?>

