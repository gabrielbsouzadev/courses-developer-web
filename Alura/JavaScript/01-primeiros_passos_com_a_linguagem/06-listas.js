console.log('Trabalhando com listas');

// const salvador = 'Salvador';
// const saoPaulo = 'São Paulo';
// const rioDeJaneiro = 'Rio de Janeiro';

const listaDeDestinos = [
    `Salvador`,
    `São Paulo`,
    `Rio de Janeiro`,
];

listaDeDestinos.push(`Curitiba`); //Adicionando elemento pra dentro do array

console.log("Destinos possiveis");
//console.log(salvador, saoPaulo, rioDeJaneiro);
console.log(listaDeDestinos);

listaDeDestinos.splice(2, 1); 
console.log(listaDeDestinos);

console.log(listaDeDestinos[1], listaDeDestinos[0]);