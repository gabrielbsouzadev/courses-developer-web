<?php

$conta1 = array('titular' => "Vinicius", 'saldo' => 1000);
$conta2 = array('titular' => "Maria", 'saldo' => 10000);
$conta3 = array('titular' => "Alberto", 'saldo' => 300);

$contaCorrentes = [$conta1, $conta2, $conta3];

for ($i=0; $i < count($contaCorrentes); $i++) { 
    echo ($contaCorrentes[$i]['titular'] . "<br>");
}