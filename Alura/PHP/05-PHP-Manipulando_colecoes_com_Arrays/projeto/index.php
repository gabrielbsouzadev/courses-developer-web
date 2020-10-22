<?php

$notas = [9, 3, 10, 5, 10, 8];

echo "<p>a nota de português é: $notas[0]</p>";
echo "<p>a nota de matemática é: $notas[1]</p>";
echo "<p>a nota de geografia é: $notas[2]</p>";
echo "<p>a nota de história é: $notas[3]</p>";
echo "<p>a nota de química é: $notas[4]</p>";
echo "<p>a nota de artes é: $notas[5]</p>";

$quantidadeDeNotas = sizeof($notas);

$soma = 0;

for ($i=0; $i < $quantidadeDeNotas; $i++) { 
    $soma = $soma + $notas[$i];
}

$media = $soma / $quantidadeDeNotas;

echo("<p>A média das notas é: $media</p>")

?>