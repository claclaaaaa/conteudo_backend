<h2>Estrutura de decisão</h2>
<p>
    As estruturas de condição permitem executar blocos distintos de código dado uma condição.

    <strong>Exemplo</strong>
    <pre>
        if(condicao){
            //instruções executadas caso a condição seja verdadeira
        }
        else {
            //instruções executadas caso a condição seja falsa
        }
    </pre>    
</p>


<pre>
10 <= media >= 6 | aprovado
6 < media >= 3   | exame
media < 3        | reprovado 
</pre> 


<?php
    $media = 7;

    if($media>=6){
        echo "O aluno foi aprovado :)";
    }
    else{
        echo "O aluno foi reprovado :(";
    }
?>


<?php
    $media = 4;

    if($media>=6){
        echo "O aluno foi aprovado :)";
    }
    else if($media >3){
            echo "O aluno pegou recuperação :/";
        } else{
              echo "O aluno foi reprovado :(";
    }
?>

<p>
    O PHP faz a conversão automática de alguns tipos para verdadeiro ou falso. 
    <br>
    <br>

    <strong>True</strong>
    <ul>
        <li>String com texto</li>
        <li>Número maior que 0</li>
        <li>Vetor com elementos</li>
    </ul>

    <strong>False</strong>
    <ul>
        <li>String vazia</li>
        <li>Número igual a 0</li>
        <li>Vetor vazio</li>
    </ul>

</p>

<?php
    if("yay"){
        echo "verdadeiro";
    }
    else{
        echo "falso";
    }
?>

<br>
<br>

<?php
    $media = 4;
    if($media>=6 || "quero passar de ano"){
        echo "sou esperto ????";
    }
    else {
        echo "blablabla me dei mal";
    }
?>