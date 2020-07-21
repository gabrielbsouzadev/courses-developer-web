// function somar(numero1, numero2) {
//     return numero1 + numero2
// }

// let resultado1 = somar(1, 2)

// // usando a variavel resultado
// console.log(resultado1)
// // ou se usar a variavel
// //console.log(somar(1, 2));

// //criando um terceiro parametro, operador
// function calcular(numero1, numero2, operador) {
//     //vamos usar a função nativa "eval" para interpretar uma string para outro tipo da variavel, nesse caso a string + para um opertador calcular
//     return eval(`${numero1} ${operador} ${numero2}`)
// }
// let resultado2 = calcular(1, 2, "-")
// console.log(resultado2);

// //criando uma função anonima, as os paramêtros precisam ser invocados logo após criar a função senão não funciona 
// // (function(numero1, numero2, operador) {
// //     return eval(`${numero1} ${operador} ${numero2}`)
// // })(5, 2, "+");

// //heroFunction, armazendando uma função em uma variavel, não precisa escrever "function"
// let calcular2 = (numero1, numero2, operador) => {
//     console.log(numero1)
//     console.log(operador)
//     console.log(numero2)

//     return eval(`${numero1} ${operador} ${numero2}`)
// }
// let resultado3 = calcular2(5, 2, "*")
// console.log(resultado3)

// //pegando a hora e data em milisegundos
// let agoraMiliseconds = Date.now()
// console.log(agoraMiliseconds)

// // //pegando a hora e data
// let agora = new Date()
// console.log(agora)
// console.log(agora.toLocaleDateString("pt-br")) //formatando de acordo com o local da maquina
// console.log(agora.getFullYear())
// console.log(agora.getDate())
// console.log(agora.getMonth()+1) // + 1, pois começa em zero
// console.log(agora.getDay())
// console.log(agora.getHours())
// console.log(agora.getMinutes())
// console.log(agora.getUTCDate())

// //Array
// let carros = [
//     "palio98",
//     "toro",
//     "uno",
//     10,
//     true,
//     new Date(), 
//     function () {}
// ]
// //todos elementos do array
// console.log(carros)
// //pegando a quantidade de itens do array
// console.log(carros.length)
// //pegando o itens do array pelo index
// console.log(carros[0])
// //pegando o Ano dentro da função date dentro do array, que esta na posição 5
// console.log(carros[5].getFullYear())

// //percorrendo o array carros, recebendo uma função anonima
// carros.forEach(function(index, valor){
//     console.log(index, valor);
// });

// //Exercicio 01 - Array montadora de carros
// montadora = [
//     "GM",
//     "Mercedes",
//     "Ferrari",
//     "BMW"
// ];

// //percorrendo array montadora com forEach
// montadora.forEach(function(index, value) {
//     console.log(index, value);
// });

//Atributos e metodos - Exemplos 01
//Atributos: Caracteristicas do objeto
//Metodos: Funções do objeto
//não é mais necessario usar a palavra Class
//Nesse carro o celular é uma classe
// let celular = function (){
//     let cor = "prata"
// }

// let objeto = new celular();
// console.log(objeto);

//usando a palavra reservada $this, para acessar um Atributo ou um Metodo
//O this promove a função a um metodos
// let celular = function (){
//     this.cor = "prata"
// }

// let objeto = new celular();
// console.log(objeto);
// console.log(objeto.cor);

// let celular = function (){
//     this.cor = "prata"
    
//     this.ligar = function() {
//         console.log("fazer uma ligação");
//         return "ligando"
//     }
// }

// let objeto = new celular();
// console.log(objeto);
// console.log(objeto.cor);
// console.log(objeto.ligar());

// //Fazendo do modo antigo - usando a palavra Class
// class celular {
//     constructor(){
//         this.cor = "prata"
//     }
//     ligar(){
//         console.log("fazer uma ligação");
//         return "ligando"
//     }
// }

// let objeto = new celular();
// console.log(objeto);
// console.log(objeto.ligar);