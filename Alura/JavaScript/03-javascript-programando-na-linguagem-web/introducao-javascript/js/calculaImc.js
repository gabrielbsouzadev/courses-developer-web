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

    var pesoEhValido = true;
    var alturaEhValida = true;


    if (peso <= 0 || peso > 1000) {
        console.log("Peso inválido");
        pesoEhValido = false;
        tdImc.textContent = "Peso Inválido";
        paciente.classList.add("paciente-invalido");
    }

    if (altura < 0 || altura > 3) {
        console.log("Altura invalida");
        alturaEhValida = false;
        tdImc.textContent = "Altura Inválida";
        paciente.classList.add("paciente-invalido");
    }

    if (pesoEhValido && alturaEhValida) {
        var imc = peso / (altura * altura);
        tdImc.textContent = imc.toFixed(2);
    }

}

// titulo.addEventListener("click", mostraMensagem);

// function mostraMensagem() {
//     console.log("Olá eu fui clicado!");
// }

// //  //Ou

// // titulo.addEventListener("click", function() {

// //     console.log("Olá só uma função Anônima");
// // });