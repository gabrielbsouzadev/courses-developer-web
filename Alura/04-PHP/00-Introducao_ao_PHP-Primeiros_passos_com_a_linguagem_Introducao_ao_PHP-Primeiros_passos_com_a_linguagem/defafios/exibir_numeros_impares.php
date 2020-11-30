<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir números Impares</title>
</head>
<body>
    <?php
        //Odesafio consiste apenas em exibir os numeros impares de 0 a 100;

        for ($i=0; $i <= 100 ; $i++) { 
            if ($i % 2 != 0) {
                echo ("$i" . "<br>");
            }
        }

    ?>
</body>
</html>