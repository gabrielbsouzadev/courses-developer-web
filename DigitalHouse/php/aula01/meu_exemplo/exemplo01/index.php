<!-- Meu exemplo -->
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $titulo ?></title>
</head>

<body>
    <?php
    $titulo = "Aula 01 de PHP - meu Exemplo";
    echo "<h3> $titulo </h3>"
    ?>

    <hr>

    <h1> Condicionais - IF</h1>
    <!-- Condicionais -->
    <!-- If - else -->
    <h5>Testando a maioridade na compra de bebida</h5>
    <?php
    $idade = 17;
    $conteudo = "tipo da variavel e conteudo ";
    var_dump($conteudo, $idade);

    if ($idade >= 18) {
        echo "<p>Pode levar a bebida</p>";
    } else {
        echo "<p>Nao pode levar</p>";
    }
    ?>
    <!-- Exercício de if - else -->
    <p>Exercício de Condicionais - if - else</p>
    <p>1 - Verificar se uma pessoa deve votar ou não, ou,
        se está pessoa possui voto facultativo</p>

    <?php
    $idade = 50;
    var_dump($idade);

    if ($idade >= 16 && $idade < 18 || $idade > 70) {
        echo "<p>Voto facutativo";
    } elseif ($idade >= 18 && $idade < 70) {
        echo "<p>Voto obrigadotrio</p>";
    } else {
        echo "Nao vota";
    }
    ?>


    <hr>
    <h1>Condicionais - Switch</h1>
    <!-- switch -->
    <?php
    $genero = "Outros";

    switch ($genero) {
        case "Masculino":
            echo "É do gênero masculino <br>";
            break;
        case "Feminino":
            echo "É do gênero feminino <br>";
            break;
        default:
            echo "Prefere não dizer <br>";
            break;
    }
    ?>
    <!-- Exercício de switch -->
    <p>Exercício de Condicionais - Switch</p>
    <p>1 - Verificar se uma variavel é 0 e retornar, você informou o valor 0.
        Ou, se a variavel é 1 e retornar, você informou o valor 1.
        Ou, se a variavel é qualquer outro número e retornar o valor informado.
    </p>

    <?php

    $numero = 0;

    switch ($numero) {
        case 0:
            /* como concatenar fora da frase */
            echo "O valor informado foi " . $numero;
            break;
        case 1:
            /* como concatenar dentro da própria frase */
            echo "O valor informado foi $numero";
            break;
        default:
            echo "O valor informado foi $numero";
            break;
    }
    ?>

    <hr>
    <h1>Arrays Simples</h1>

    <?php
    $arrayAnimais = [
        "Cachorro",
        "Gato",
        "Girafa",
        "Elefante"
    ];

    // percorrendo arrayAnimais
    echo "<pre>";
    var_dump($arrayAnimais);
    echo "</pre>";

    $estojo = array(
        "caneta azul",
        "caneta verde",
        "caneta vermelha",
        "controle do projetor"
    );

    // percorrendo array estojo
    echo "<pre>";
    var_dump($estojo);
    echo "</pre>";

    ?>

    <?php
    $usuario = [
        "email" => "gabrielbsouzadev@gmail.com",
        "senha" => "123456"
    ];

    // percorrendo array usuario
    echo "<pre>";
    var_dump($usuario);
    echo "</pre>";
    ?>

    <hr>
    <h1>Foreach</h1>

    <?php
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    foreach ($arr as $item) {
        echo $item . "<br>";
    }
    ?>

</body>

</html>