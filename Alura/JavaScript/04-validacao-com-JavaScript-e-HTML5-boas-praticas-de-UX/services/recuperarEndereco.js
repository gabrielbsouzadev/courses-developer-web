export const recuperarEndereco = input => {
    const cepNumeros = input.value.replace(/\D/g, "");

    if (input.validity.valid) {
        const url = `https://viacep.com.br/ws/${cepNumeros}/json/`;
        const oprions = {
            metho: 'GET',
            mode: "cors",
            headers: {
                "content-type": "application/json;charset=utf-8"
            }
        };

        fetch(url, oprions)
        .then(response => response.json())
        .then(data => {
            if (data.erro) {
                input.setCustomvalidity("Este não é um CEP válido");
                return;
            }

            preencherCampos(data);

            input.setCustomvalidity("");
            return;
        });
    }
};

const preencherCampos = (data) => {
    const campoLogradouro = document.getElementById("logradouro");
    const campoCidade = document.getElementById("cidade");
    const campoEstado = document.getElementById("estado");

    campoLogradouro.value = data.logradouro;
    campoCidade.value = data.localidade;
    campoEstado.value = data.uf;
};