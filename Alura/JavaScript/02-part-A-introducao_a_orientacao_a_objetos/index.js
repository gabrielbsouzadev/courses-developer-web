import { Cliente } from "./Cliente.js";
import { ContaCorrente } from "./ContaCorrente.js";

const cliente1 = new Cliente("Ricardo", 11122233310);
const cliente2 = new Cliente("Alice", 11122233320);
new Cliente("Alice", 11122233320);


const contaCorrenteRicardo = new ContaCorrente(1001, cliente1);
contaCorrenteRicardo.depositar(500);

const conta2 = new ContaCorrente(102, cliente2);

let valor = 200;
contaCorrenteRicardo.transferir(valor, conta2);

console.log(ContaCorrente.numeroDeContas);

if ((ContaCorrente.numeroDeContas) > 2) {
    console.log("Ja Batemos 10000 contas");
}
