<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Aula - 01</title>
</head>
<body>
    <?php
        $titulo = "Primeira aula de PHP";
    ?>

    <h1><?php echo $titulo ?></h1>

    <!-- Exercicio de if - else -->
    <p>Exercicio de condicionais</p>
    
    <!-- condicionais -->
    <!-- if - else -->
    <?php
        $idade = 17;
        
        if($idade >= 18){
            echo "<h1>Pode levar</h1>";
        } else {
            echo "<h1>Nao vai levar</h1>";
        }
    ?>

    <p>1 - Verificar se uma pessoa pode votar ou não ou se está pessoa possui voto facultativo</p>

    <?php
        $idade = 50;
        
        if ($idade < 16) {
            echo "Nao pode votar <br>";
        }
    
        else if ($idade > 18 && $idade < 70) {
            echo "Obrigado a votar <br>";
        }

        else {
            echo "Voto facutativo <br>";
        }
    ?>
    <hr>

    <!-- switch -->
    <?php
        $genero = "masculino";
        
        switch ( $genero ) {
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

    <!-- Exercicio de Switch -->
    <p>Exercicio de condicionais - Switch</p>
    <p>1 - Verificar se uma variavel é 0 e retornar, voce informou o valor 0. <br>
        Ou, se a variavel é 1 e retornar, voce informou o valor 1. <br>
        Ou, se a varivel é qualquer outro numero e retornar o valor informado. <br>
    </p>

    <?php
        $numero = 0;
        
        switch ($numero) {
        case 1:
            echo "O numero é: 1 <br>";
            break;
        case 0:
            echo "O numero é 0 <br>";
            break;
        default:
            echo "O numero é: " . $numero;
            break;
        }
    ?>
    <hr>

    <h1>Arrays</h1>
    <?php
        $arrayAnimais = [
            "Cachorro",
            25,
            "Girafa",
            "Elefante"
        ];
        //percorrendo 
        echo "<pre>";
            var_dump($arrayAnimais);
        echo "</pre>";
        
        $estojo = array(
            "Caneta Azul",
            "Caneta Verde",
            "Caneta Vermelha",
            "Controle do projetor"
        );
        echo "<pre>";
            var_dump($estojo);
        echo "</pre>";
    ?>
    <hr>
    <h1>Arrays Associativos</h1>

    <?php
            $usuario = [
            "email" => "vtorres@digitalhouse.com",
            "senha" => "123456"   
        ];

        // percorrendo array usuario
        echo "<pre>";
            var_dump($usuario);
        echo "</pre>";
    ?>

</body>
</html>

<!-- Exemploe da aula -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Aula 01</title>
</head>

<body>
    <?php
        $titulo = "Primeira Aula de PHP";
    ?>
    <h1>
        <?php echo $titulo; ?>
    </h1>

    <hr>
    <h1>Condicionais - IF</h1>
    <!-- Condicionais -->
    <!-- if - else -->
    <?php
        $idade = 17;

        if($idade >= 18){
            echo "<p>Pode levar</p>";
        } else {
            echo "<p>Não vai levar</p>";
        }
    ?>

    <!-- Exercício de if - else -->
    <p>Exercício de Condicionais - if - else</p>
    <p>1 - Verificar se uma pessoa deve votar ou não, ou,
        se está pessoa possui voto facultativo</p>

    <?php
        $idade = 50;
        
        if($idade >= 16 && $idade < 18 || $idade > 70){
            echo "voto facultativo <br>";
        } else if ($idade >= 18 && $idade <= 70){
            echo "voto obrigatório <br>";
        } else {
            echo "não vota <br>";
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
        
        switch($numero){
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
    v

    <?php
        $usuario = [
            "email" => "vtorres@digitalhouse.com",
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
        $arr = [1,2,3,4,5,6,7,8,9,10];

        foreach ($arr as $item) {
            echo $item . "<br>";
        }
    ?>
</body>

</html>