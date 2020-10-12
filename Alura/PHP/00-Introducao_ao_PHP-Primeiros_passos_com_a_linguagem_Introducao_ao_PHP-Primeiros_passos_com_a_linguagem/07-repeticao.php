<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $contador = 1;
    while ($contador <= 15) {

        echo ($contador . "<br>");
        $contador++;
    }

    //Ou


    for ($contador2 = 0; $contador2 <= 15; $contador2++) {
        if ($contador2 == 15) {
            echo ("$contador2 \n" . "<br>");
            break;
        }
        echo ("$contador2" . ", \t");
    }

    for ($contador3 = 1; $contador3 <= 15; $contador3++) {
        if ($contador3  == 13) {
            continue; //Para pular a iteração
            //Ou
            //break; //Para parar a execução
        } else if ($contador3 == 15) {
            break;
        } else
        echo ("#$contador3 " . PHP_EOL);
    }

    // for ($contador = 1; $contador <= 15; $contador ++) {
    //     if ($contador == 13) {
    //         continue;
    //     } 
    //     echo "#$contador" . PHP_EOL;
    // }

    ?>

    <!-- <script>
        var contador = 1;

        while (contator >= 15) {
            console.log(contator);
            contador++;
        }
    </script> -->
</body>

</html>