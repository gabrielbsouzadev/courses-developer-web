import { validarRG } from "./validarRG.js";
import { validarDataNascimento } from "./validarDataNascimento.js";
import { validarCPF } from "./validarCPF.js";
import { recuperarEndereco } from "./recuperarEndereco.js";

const retornarMensagemDeErro = (tipo, validity) => {
    let mensagemDeErro = "";
    const tiposDeErro = [
        "valueMissing", 
        "typeMismatch", 
        "tooShort", 
        "rangeUnderflow",
        "customError",
        "patternMismatch",
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
            valueMissing: "O CPF é necessário",
            customError: "Este não é um CPF válido",
            tooShort: "Este não é um CPF válido"
        },
        rg: {
            valueMissing: "O RG é necessário",
            customError: "Este não é um RG válido",
            tooShort: "Este não é um Rg válido"
        },
        cep: {
            valueMissing: "O CEP é necessário",
            patternMismatch: "Este não é um CEP válido",
            customError: "Este não é um CEP válido"
        },
        logradouro: {
            valueMissing: "O logradouro é necessário"
        },
        cidade: {
            valueMissing: "Acidade é necessário"
        },
        estado: {
            valueMissing: "O Estado é necessário"
        },
        preco: {
            valueMissing: "O Preço é necessário"
        },
        nomeProduto: {
            valueMissing: "O nome do produto é necessário"
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
        dataNascimento: input => validarDataNascimento(input),
        cpf: input => validarCPF(input),
        cep: input => recuperarEndereco(input),
        rg: input => validarRG(input),
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