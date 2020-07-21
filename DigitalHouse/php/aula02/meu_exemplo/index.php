<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>PHP - Aula 02</title>
</head>
<body>
    
    <h1>Loops e Funcoes</h1>

    <p>Loops - For Incremento</p>

    <?php
        for ($i=0; $i <= 10 ; $i++) { 
            echo $i . "<br>";
        }
    ?>

    <hr>

    <p>For Utilizando decremento</p>
    <?php
        for ($i=10; $i >= 0 ; $i--) { 
            echo $i . "<br>";
        }
    ?>

    <hr>

    <p>While - utilizando incremento</p>

    <?php
        $i = 0;
        while ($i <= 10) {
            echo $i . "<br>";
            $i++;
        }
    ?>

    <hr>

    <p>While - utilizando decremento</p>
    
    <?php
        $a = 10;
        while ($a >= 0) {
            echo $a . "<br>";
            $a --;
        }
    ?>

    <p>Do While - Utilizando Incremento</p>

    <?php
        $i = 0;
        do {
            echo $i . "<br>";
            $i++;
        } while ($i <= 10);
    ?>

    <hr>

    <p>Do While - Utilizando Incremento</p>

    <?php 
        $i = 10;
        do {
            echo $i . "<br>";
            $i--;
        } while ($i >= 0);
    ?>

    <hr>

    <h1>Array de animais para exemplos utilizando Count e For</h1>
    <p>onde iremos percorrer array</p>

    <?php
        // array de animais para exemplos utilizando Count e For
        // onde iremos percorrer array
        $animais = ["Gato", "Cachorro", "Dinossauro", "Girrafa", "Elefante"];

        $resultado = count($animais);
        echo "Resultado da quantidade de elementos do array: " .  $resultado . "<br><br>";

        for ($i=0; $i < count($animais); $i++) { 
            echo $animais[$i] . "<br>";
        }
    ?>

    <hr>

    <h1>While percorrendo Array</h1>

    <?php
        //$animais = ["Gato", "Cachorro", "Dinossauro", "Girrafa", "Elefante"];
        $i = 0;

        while ($i < count($animais)) {
            echo $animais[$i] . "<br>";
            $i++;
        }

    ?>

    <h1>Do While percorrendo Array</h1>

    <?php
        $i = 0;
        //$animais = ["Gato", "Cachorro", "Dinossauro", "Girrafa", "Elefante"];
        do {
            echo $animais[$i] . "<br>";
            $i++;
        } while ($i < count($animais));
    ?>

    <h1>Foreach percorrendo array</h1>

    <?php
        //$animais = ["Gato", "Cachorro", "Dinossauro", "Girrafa", "Elefante"];

        foreach ($animais as $animal) {
            echo $animal . "<br>";
        }
    ?>

    <hr>
    
    <h1>Foreach percorrendo array Assosciativo</h1>

    <?php
        $usuario = [
            "nome" => "Gabriel",
            "email" => "gabrielbsouzadev@gmail.com",
            "telefone" => "(99)99999-9999"
        ];

        foreach ($usuario as $chave => $valor) {
            // Percorre apenas o valor
            // echo $value . "<br>";
            
            echo "$chave => $valor" . "<br>";
        }
    ?>

    <hr>

    <h1>Funções</h1>
    <p>Função que retorna a tabuada de um número</p>

    <?php

        function tabuada($numero){
            $arrayDeNumerosASeremMultiplicaodos = [];

            for ($i=1; $i <= 10 ; $i++) { 
                $resultadoTabuada = $numero * $i;
                array_push($arrayDeNumerosASeremMultiplicaodos, $resultadoTabuada);
            }
            return $arrayDeNumerosASeremMultiplicaodos;
        }

        $resultadoDaConta = tabuada(1); // Numero que sera multiplicado pela tabuada
        foreach ($resultadoDaConta as $chave => $valor) {
            echo $valor . "<br>";
        }
    ?>

</body>
</html>