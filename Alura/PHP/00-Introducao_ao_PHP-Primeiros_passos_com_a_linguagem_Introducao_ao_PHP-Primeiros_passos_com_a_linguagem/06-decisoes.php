<?php

    $idade = 17;
    $idadeAcompanhante = 18;
    $numeroDePessoas = 2;

    echo "Você só pode entrar se tiver mais do que 18 anos" . PHP_EOL;


    // Ou pode ser escrito:
    // if ($idade == 18 || $idade > 18)
    // Ou
    // if ($idade == 18 or $idade > 18)

    //Ou um exemplo ternario
    // $mensagem = ($idade >= 18) ? "Vocé pode entrar" : "Você é menor de idade";
    // echo $mensagem

    if ($idade >= 18) {
        echo "Você tem $idade anos " . PHP_EOL;
        echo "Pode entrar" . PHP_EOL;
    } else if ($idade >= 16 && $numeroDePessoas > 1 && $idadeAcompanhante >= 18) {
            echo "Você tem $idade e está acompanhado pode entrar com uma pessoas maior de idade" . PHP_EOL;
    } else {
            echo "Você tem $idade e está sozinho" . PHP_EOL;
            echo "Você não pode entrar " . PHP_EOL;
    } 

    
?>