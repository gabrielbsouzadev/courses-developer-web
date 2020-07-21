<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Aula - 01 - Meu exmplo02</title>
</head>

<body>
    <?php
        $titulo = "Aula 01 PHP - Meu exemplo 02";
        echo "<h1> $titulo </h1>";

        //Condicionais
        //If - Else

        $idade = 75;

        if ($idade > 17) {
            echo "pode levar";
        } else {
            echo "Voce é menor nao pode levar a bebida";
        }
    ?>
    <hr>

    <p>1 - Verificar se uma pessoa pode votar ou não ou se está pessoa possui voto facultativo</p>

    <?php
        if ($idade > 17 && $idade < 70) {
            echo "Obrigado a votar";
        } else if ($idade >= 16 && $idade < 18 || $idade > 70) {
            echo "voto facutativo";
        } else {
            echo "Nao vota";
        }
    ?>
    <hr>

    <p>Exercicio de condicionais - Switch</p>
    <p>1 - Verificar se uma variavel é 0 e retornar, voce informou o valor 0. <br>
        Ou, se a variavel é 1 e retornar, voce informou o valor 1. <br>
        Ou, se a varivel é qualquer outro numero e retornar o valor informado. <br>
    </p>
    <?php
        $numero = 7;
        
        switch ($numero) {
            case 1:
                echo "O valor é 1: <br>";
                break;
            
            case 0:
                echo "O valor é: 0 <br>";
            default:
                echo "O numero é: $numero";
                break;
        }
    ?>

    <p>Outro Exemplo de Switch Case</p>

    <?php
        $genero = "Outros";

        switch ($genero) {
            case 'Feminino':
                echo "é do genero feminino";
                break;
            
            case 'Masculino':
                echo "é do genero masculino";
                break;
            default:
                echo "Prefere nao dizer";
                break;
        }
    ?>

    <h1>Arrays</h1>
    <?php
        $arrayAnimais = [
            "Cachorro",
            "Elefante",
            25,
            "Gato"
        ];
        
        //percorrendo Array
        echo "<pre>";
            var_dump($arrayAnimais);
        echo "</pre>";

        $arrayEstojo = array(
            "Caneta Azul",
            "Caneta Vermelha",
            "Caneta Verde",
            "Lapiseira"
        );

        //percorrendo Array
        echo "<pre>";
            var_dump($arrayEstojo);
        echo "</pre>";

    ?>

    <hr>
    <h1>Arrays Associatvos</h1>
    <?php
        $arrayUsuario = [
            "email" => "gabrielbsouzadev@gmail.com",
            "senha" => "123456"
        ];
        //percorrendo Array
        echo "<pre>";
            var_dump($arrayUsuario);
        echo "</pre>";
    ?>

    <hr>
    <h1>ForEach</h1>
    <?php
        $arrayNumeros = [1,2,3,4,5,6,7,8,9,10];

        foreach ($arrayNumeros as $numero) {
            echo $numero . "<br>";
        }
    ?>

</body>

</html>