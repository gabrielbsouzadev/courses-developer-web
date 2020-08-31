import { validarDataNascimento } from "./validarDataNascimento.js";

export const validarInput = (input, adicionarErro = true) => {
    const classeElementoErro = "erro-validacao";
    const classeInputErro = "possui-erro-validacao";
    const elementoPai = input.parentNode;
    const elementoErroExiste = elementoPai.querySelector(
        `.${classeElementoErro}`
    );
    const elementoErro = elementoErroExiste || document.createElement("div");
    const elementoEhValido = input.validity.valid;
    const tipo = input.dataset.tipo;
    const validadoresEspecificos = {
        dataNascimento: (input) => validarDataNascimento(input)
    };

    if (validadoresEspecificos[tipo]) {
        validadoresEspecificos[tipo](input);
    }

    if (!elementoEhValido) {
        //nao eh valido
        elementoErro.className = classeElementoErro;
        input.classList.add(classeInputErro);
        elementoErro.textContent = "Ha um erro aqui";
        if (adicionarErro) {
            input.after(elementoErro);
            input.classList.add(classeInputErro);
        }
    } else {
        //eh valido
        elementoErro.remove();
        input.classList.remove(classeInputErro);
    }
};