var pacientes = document.querySelectorAll(".paciente");

var tabela = document.querySelector("table");

tabela.addEventListener("dblclick", function(event) {

    event.target.parentNode.classList.add("fadeOut");
    
    setTimeout(() => {
        event.target.parentNode.remove();
    }, 500);


    // // OU
    // var alvoEvento = event.target;
    // var paiDoAlvo = alvoEvento.parentNode; // TR = paciente - remover

    // paiDoAlvo.remove();
});

// pacientes.forEach(paciente => {
//     paciente.addEventListener("dblclick", function() {
//         console.log("Fui clicado com um duplo click");
//         this.remove();
//     });
// });