class Cliente {
    nome;
    cpf;

}

class ContaCorrente {
    agencia;
    saldo;
}

const cliente1 = new Cliente();
cliente1.nome = "Ricardo";
cliente1.cpf = 11122233310;
cliente1.agencia = 1001;
cliente1.saldo = 0;

const cliente2 = new Cliente();
cliente2.nome = "Alice"
cliente2.cpf = 11122233320;
cliente2.agencia = 1001;
cliente2.saldo = 0;

const contaCorrenteRicardo = new ContaCorrente();
ContaCorrente.saldo = 0;
ContaCorrente.agencia = 1001;
console.log(contaCorr);

console.log(cliente1);
console.log(cliente2);