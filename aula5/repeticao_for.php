<h2>Estrutura de repetição - for</h2>
<p>
    Utilizada para repetir um conjunto de intruções por um determinado número de vezes.
</p>
<strong>Exemplo</strong>

<pre>
    for(inicio, condição, passo){
        //comandos a serem repetidos
    }
</pre>

<?php
    for($contador = 1; $contador < 10; $contador++){
    echo "Repetindo essa linha $contador x<br>";
}
?>    

<br>
<br>

<?php
    for($contador = 1; $contador < 10; $contador++){
    echo "2 x $contador = <br>";
}
?>    