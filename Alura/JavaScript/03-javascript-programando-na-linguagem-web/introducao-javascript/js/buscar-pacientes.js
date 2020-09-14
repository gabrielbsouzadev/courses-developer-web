//implementando buscar pacientes ao carregar a pagina
// window.onload = () => {
//     var xhr = new XMLHttpRequest();
//     xhr.open("GET", "https://api-pacientes.herokuapp.com/pacientes");

//     xhr.send();
// }

var botaoAdicionar = document.querySelector("#buscar-pacientes");

botaoAdicionar.addEventListener("click", function() {
    
    var xhr = new XMLHttpRequest();
    // Buscando da URL abaixo como exemplo da Alura
    // xhr.open("GET", "https://api-pacientes.herokuapp.com/pacientes");

    xhr.open("GET", "https://gist.githubusercontent.com/gabrielbsouzadev/de3a28c527f308726b2f4a90286d549b/raw/9b3ab3f5564bd874900519b0db48755f042c189a/pacientes.json");

    xhr.addEventListener("load", function() {
        var erroAjax = document.querySelector("#erro-ajax");

        if (xhr.status == 200) {
            erroAjax.classList.add("invisivel");
            var resposta = xhr.responseText;
            var pacientes = JSON.parse(resposta);

            pacientes.forEach(function(paciente) {
                adicionaPacienteNaTabela(paciente);
            });
        } else {
            erroAjax.classList.remove("invisivel");
        }
    });

    xhr.send();
});