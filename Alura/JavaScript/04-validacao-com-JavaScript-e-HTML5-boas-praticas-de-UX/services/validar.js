import { validarDataNascimento } from "./validarDataNascimento.js";

const retornarMensagemDeErro = (tipo, validity) => {
    let mensagemDeErro = "";
    const tiposDeErro = [
        "valueMissing", 
        "typeMismatch", 
        "tooShort", 
        "rangeUnderflow"
    ];

    const mensagensDeErro = {
        email: {
            valueMissing: "O e-mail é necessario",
            typeMismatch: "Este não é um e-mail válido"
        },
        senha: {
            valueMissing: "A senha é necessária",
            tooShort: "A senha deve te no minimo 4 caracteres"
        },
        dataNascimento: {
            valueMissing: "A data de nascimento é necessária",
            rangeUnderflow: "A data minima é 01/01/1901",
            customError: "A idade minima é 18 anos"
        },
        cpf: {
            valueMissing: "O CPF é necessário"
        },
        rg: {
            valueMissing: "O RG é necessário"
        },
        cep: {
            valueMissing: "O CEP é necessário"
        },
        logradouro: {
            valueMissing: "O logradouro é necessário"
        },
        cidade: {
            valueMissing: "Acidade é necessário"
        },
        estado: {
            valueMissing: "O Estado é necessário"
        }
    };

    tiposDeErro.forEach(erro => {
        if (validity[erro]) {
            mensagemDeErro = mensagensDeErro[tipo][erro];
        }
    });

    return mensagemDeErro;
};

export const validarInput = (input, adicionarErro = true) => {
    const elementoEhValido = input.validity.valid;
    const classeElementoErro = "erro-validacao";
    const classeInputErro = "possui-erro-validacao";
    const elementoPai = input.parentNode;
    const elementoErroExiste = elementoPai.querySelector(
        `.${classeElementoErro}`
    );
    const elementoErro = elementoErroExiste || document.createElement("div");
    
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
        elementoErro.textContent = retornarMensagemDeErro(tipo, input.validity);
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