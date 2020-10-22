console.log('Trabalhando com Condicionais');

const listaDeDestinos = [
    `Salvador`,
    `São Paulo`,
    `Rio de Janeiro`,
];

const idadeComprador = 21;
const estaAcompanhada = true;
const temPassagemComprada = false;

console.log("Destinos possiveis");
console.log(listaDeDestinos);

// if (idadeComprador >= 18) {
//     console.log("Comprador Maior de idade");
//     listaDeDestinos.splice(1, 1); //removendo um item
// } else if (estaAcompanhada) {
//     console.log("Comprador está acompanhado");
//     listaDeDestinos.splice(1, 1) //removendo item
// } else {
//     console.log("Não é maior de idade e não posso vender");
// };

if (idadeComprador >= 18 || estaAcompanhada == true) {
    console.log("Boa Viagem!!");
    listaDeDestinos.splice(1, 1); //removendo um item
} else {
    console.log("Não é maior de idade e não posso vender");
};

console.log("Embarque \n\n");
if (idadeComprador >= 18 && temPassagemComprada) {
    console.log("Boa Viagem");
} else {
    console.log("Voce não pode embarcar");
}

console.log(listaDeDestinos);

// console.log(idadeComprador > 18);
// console.log(idadeComprador < 18);
// console.log(idadeComprador <= 18);
// console.log(idadeComprador >= 18);
// console.log(idadeComprador == 18);