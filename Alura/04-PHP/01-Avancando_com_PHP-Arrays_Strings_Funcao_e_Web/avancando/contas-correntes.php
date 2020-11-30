<?php

// $conta1 = array('titular' => "Vinicius", 'saldo' => 1000);
// $conta2 = array('titular' => "Maria", 'saldo' => 10000);
// $conta3 = array('titular' => "Alberto", 'saldo' => 300);

// $contaCorrentes = [$conta1, $conta2, $conta3];

// for ($i=0; $i < count($contaCorrentes); $i++) { 
//     echo ($contaCorrentes[$i]['titular'] . "<br>");
// }

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.345.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100 
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo($cpf . " " . $conta['titular'] . "<br>");
}

// echo ("Carros: <br>");

// //Exemplos para Carros
// $carros = [
//     'FLN-3911' => [
//         'marca' => 'Honda',
//         'modelo' => 'Civic'
//     ],
//     'CSP-6752' => [
//         'marca' => 'VW',
//         'modelo' => 'Brasilia'
//     ]  
// ];

// foreach ($carros as $placa => $carro) {
//     echo($placa . ": " . $carro["marca"] . "<br>");
// }