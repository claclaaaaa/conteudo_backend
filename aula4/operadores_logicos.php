<h2>Operadores Lógicos</h2>

<ol>
    <li>and - e</li>
    <li>or - ou</li>
    <li>xor - ou exclusivo</li>
    <li>! - não</li>
    <li>&& - e</li>
    <li>|| - ou</li>
</ol>

<?php
$media = 6;
$faltas = 20;
$criterio1 = $media > 6; //false
$criterio2 = $faltas < 25; //true
$resultado = $criterio1 && $criterio2; //false
var_dump($resultado);
?>

