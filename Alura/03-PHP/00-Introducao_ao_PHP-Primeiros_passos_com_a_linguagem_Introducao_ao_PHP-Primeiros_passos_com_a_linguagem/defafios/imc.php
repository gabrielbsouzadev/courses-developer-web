<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $peso = 70;
        $altura = 1.70;

        $resultadoImc = $peso / ($altura**2);

        echo ("O meu Imc é: $resultadoImc <br>");

        if ($resultadoImc < 18) {
            echo("O Imc está abaixo do recomendado");
        } else if ($resultadoImc <= 25){
            echo("Imc dentro do recomendado");
        } else {
            echo "Acima do recomendado";
        }

    ?>
</body>
</html>