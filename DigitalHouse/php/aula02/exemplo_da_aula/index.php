<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Aula 02</title>
</head>
<body>
    <h1>Loops e funcoes</h1>

    <hr>

    <p>Loops - For incremento</p>

    <?php
        for ($i=1; $i <= 10; $i++) {
          echo $i . "<br>";
          //ou
          //echo "<p>$i </p>";   
        }
    ?>

    <hr>

    <p>For - utilizando decremento</p>
    <?php
        for ($i=10; $i > 0 ; $i--) { 
            echo $i . "<br>";
        }
    ?>

    <hr>

    <p> While - utilizando incremento</p>

    <?php
        $i = 1;
        while ($i <= 10) {
            echo $i . "<br>";
            $i++;
        }
    ?>

    <hr>

    <p> While - utilizando decremento</p>

    <?php
        $i = 10;
        while ($i >= 1) {
            echo $i . "<br>";
            $i--;
        }
    ?>

    <hr>

    <p>Do while - utilizando incremento</p>
    <?php
        $i = 1;
        do {
            echo $i . "<br>";
            $i++;
        } while ($i <= 10);
    ?>

    <hr>

    <p>Do while - utilizando decremento</p>
    <?php
        $i = 10;
        do {
            echo $i . "<br>";
            $i--;
        } while ($i >= 1);
    ?>

    <hr>

    <p>Exemplos percorrendo Arrays com Loops</p>

    <p>For percorrendo array</p>

    <?php
        // array de animais que sera utilizado para exemplos
        // onde iremos percorrer array
        $animais = ["Gato", "Cachorro", "Girafa", "Elefante", "Leão"];
    
        //$resultados = count($animais);
        //echo $resultados;

        for ($i=0; $i < count($animais); $i++) { 
            echo $animais[$i] . "<br>";;
        }
    ?>

    <p>While percorrendo array</p>

    <?php

        //$animais = ["Gato", "Cachorro", "Girafa", "Elefante", "Leão"];
        $i = 0;

        while ($i < count($animais)) {
            echo $animais[$i] . "<br>";
            $i++;
        }

    ?>

    <hr>

    <p>Do while percorrendo array</p>
    
    <?php

        //$animais = ["Gato", "Cachorro", "Girafa", "Elefante", "Leão"];
        $i = 0;

        do {
            echo $animais[$i] . "<br>";
            $i++;
        } while ($i < count($animais)); 

    ?>

    <p>Foreach percorrendo array</p>

    <?php

        //$animais = ["Gato", "Cachorro", "Girafa", "Elefante", "Leão"];

        foreach ($animais as $animal) {
            echo $animal . "<br>";
        }

    ?>
    
    <hr>
    
    <p>Foreach percorrendo array associativo</p>

    <?php

        
        $user = [
            "nome" => "marcelao",
            "email" => "mdiamentdigitalhouse.com",
            "telefone" => "(11) 99999-9999", 
        ];

        foreach ($user as $key => $value) {
            //Percorre apenas o valor
            //echo $value . "<br>";

            echo "$key => $value" . "<br>";
        }

    ?>

    <hr>

    <p>Funções</p>

    <p>Função que retorna tabuada de um numero</p>

        <?php
        function tabuada($numero){
                $arrayResultados = [];
                
                for ($i=1; $i <= 10; $i++) { 
                    $resultado = $numero * $i;
                    array_push($arrayResultados, $resultado);
                }
                return $arrayResultados;
            }

            $result = tabuada(10);
            foreach ($result as $key => $value) {
                echo $value . "<br>";
            }
        ?>

</body>
</html>