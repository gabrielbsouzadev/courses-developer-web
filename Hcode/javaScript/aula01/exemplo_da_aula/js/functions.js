// função alert
alert('Olá Mundo')

// var olaMundo = 'Hello Word'

//console.log ira aparecer apaenar no console do inspecionar do navegador
// console.log(olaMundo)
// console.log(olaMundo)
// console.log(olaMundo)
// console.log(olaMundo)

//let um variavel usada apenas dentro da um bloco
// let a = 10
// const b = "10"

// console.log(a == b && typeof a == 'string')

//intruções de Semaforo usando if
let cor = "";

cor = "verde"
if (cor === "verde") {
    console.log("siga")
} else if (cor === "amarelo") {
    console.log("atenção")
} else {
    console.log("pare")
}

//intruções de Semaforo usando switch Case
cor = "amarelo"
switch (cor) {
    case "verde":
        console.log("siga")
        break;

    case "amarelo":
        console.log("atenção")
        break;

    case "vermelho":
        console.log("pare")
        break;

    default:
        break;
}

//Fazendo uma tabuada com for

let numero = 7

//numero se inicia em 0, vai ate numero(nesse caso 10), soma 1 por 1

for (let index = 0; index <= 10 ; index++) {
                //template String usando a crase, como se fosse uma string mutante
    console.log(`${index} X ${numero} = ${index * numero}`)
    //Antes era usado concatenação como no exemplo abaixo
    //console.log(index + " X " + numero + " = " + (index * numero));
}