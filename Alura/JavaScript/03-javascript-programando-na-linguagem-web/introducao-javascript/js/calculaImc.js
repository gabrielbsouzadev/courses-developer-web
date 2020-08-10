var titulo = (document.querySelector(".titulo"));
titulo.textContent = "Aparecida Nutricionista";

var pacientes = document.querySelectorAll(".paciente");


for (let index = 0; index < pacientes.length; index++) {

    var paciente = pacientes[index];

    var tdPeso = paciente.querySelector(".info-peso");
    var peso = tdPeso.textContent;

    var tdAltura = paciente.querySelector(".info-altura");
    var altura = tdAltura.textContent;

    var tdImc = paciente.querySelector(".info-imc");

    var pesoEhValido = validaPeso(peso);
    var alturaEhValida = validaAltura(altura);


    if (!pesoEhValido) {
        console.log("Peso inválido");
        pesoEhValido = false;
        tdImc.textContent = "Peso Inválido";
        paciente.classList.add("paciente-invalido");
    }

    if (!alturaEhValida) {
        console.log("Altura invalida");
        alturaEhValida = false;
        tdImc.textContent = "Altura Inválida";
        paciente.classList.add("paciente-invalido");
    }

    if (pesoEhValido && alturaEhValida) {
        var imc = calculaImc(peso, altura);
        tdImc.textContent = imc;
    }

}

function validaPeso(peso) {
    if(peso >= 0 && peso < 1000){
        return true;
    } else {
        return false;
    }
}

function validaAltura(altura) {
    if (altura >= 0 && altura <= 3.0) {
        return true;
    } else {
        false;
    }
}

function calculaImc(peso, altura) {
    var imc = 0;
    
    imc = peso / (altura * altura);

    return imc.toFixed(2);
}

// titulo.addEventListener("click", mostraMensagem);

// function mostraMensagem() {
//     console.log("Olá eu fui clicado!");
// }

// //  //Ou

// // titulo.addEventListener("click", function() {

// //     console.log("Olá só uma função Anônima");
// // });

