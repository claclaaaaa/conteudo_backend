<style>
.grid{
display:

}
</style>

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

<br>
<pre>♡ tabuadinhas !!! cuti cuti iti malia ♡</pre>

<div class="grid">
    <?php
        for($tabuada=1; $tabuada <=10; $tabuada++){
            echo "<div class='tabuada'>";
             for($contador = 1; $contador < 10; $contador++){
             echo "$tabuada x $contador = " . $tabuada*$contador .  "<br>";
             }
             echo "</div>";
        }
    ?>   
</div>