<?php
function criarConta (string $cpf, string $nomeTitular, float $saldo) {
    return [
        $cpf => [
            'titular' => $nomeTitular,
            'saldo' => $saldo
        ]
    ];
}