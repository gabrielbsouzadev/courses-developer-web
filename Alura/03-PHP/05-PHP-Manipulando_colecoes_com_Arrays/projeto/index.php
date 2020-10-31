<?php

echo ("<h3>Utilizando o for</h3>"); 

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

echo("<p>A média das notas é: $media</p><hr>");

echo("<h3>Utilizando o ForEach</h3>");

$saldos = [
    2500,
    1000,
    4500,
    3000,
    8700,
    9000
];

foreach ($saldos as $saldo) {
    echo "<p>O saldo é $saldo</p>";
}

//sort para ordernar o array
//sort($saldos);

echo("<h3>Iterando uma string</h3>");

$nomes = "Giovanni, João, Maria, Pedro";

$array_nomes = explode(", ", $nomes);

foreach ($array_nomes as $nome) {
    echo "<p>Olá $nome</p>";
}

$nomesJuntos = implode(", ", $array_nomes);

echo $nomesJuntos;

?>

<?php

echo("<h3>Removendo um elemento do array</h3>");

require "ArrayUtils.php";

$correntistas_e_compras = [
    "Giovanni",
     12,
    "Maria",
     25,
    "Luis",
    "Luísa",
    "12"
];

echo "<pre>";

var_dump($correntistas_e_compras);

ArrayUtils::remover(12, $correntistas_e_compras);

var_dump($correntistas_e_compras);

echo "</pre>";
