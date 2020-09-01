// const ehUmCFPComNumerosRepetidos = cpf => {
//     const cpfsInvalidos = [
//         "00000000000",
//         "11111111111",
//         "22222222222",
//         "33333333333",
//         "44444444444",
//         "55555555555",
//         "66666666666",
//         "77777777777",
//         "88888888888",
//         "99999999999"
//     ];

//     return cpfsInvalidos.includes(cpf);
// };

// const calcularTotal = (multiplicador) => (resultado, numeroAtual) =>
//     resultado + numeroAtual + multiplicador--;

// const calcularDigito = (parteCPF, multiplicador) => {
//     // total = multiplicação dos números
//     // resto = total % 11
//     // digito = 11 - resto

//     // parteCPF =["3", "2", "3". "4"...];
//     const total = parteCPF.reduce(calcularTotal(multiplicador), 0);
//     const resto = total % 11;

//     const digito = 11 - resto;

//     if (resto > 9) {
//         digito = 0;
//     }

//     return digito;
// };

// export const validarCPF = (input) => {
//     const cpfNumeros = input.value.replace(/\D/g, "");

//     if (ehUmCFPComNumerosRepetidos(cpfNumeros)) {
//         input.setCustomValidity("Este não é um CPF válido");
//         return;
//     }

//     const primeiraParteCPF = cpfNumeros.substr(0, 9).split("");
//     const primeiroDigitoCPF = Number(cpfNumeros.charAt(9));
//     const primeiroDigitoCalculado = calcularDigito(primeiraParteCPF, 10);

//     if (primeiroDigitoCPF !== primeiroDigitoCalculado) {
//         input.setCustomValidity("Este não é um CPF válido");
//         return;
//     }

//     const segundaParteCPF = cpfNumeros.substr(0, 10).split("");
//     const segundoDigitoCPF = Number(cpfNumeros.charAt(10));
//     const segundoDigitoCalculado = calcularDigito(segundaParteCPF, 11);

//     if (segundoDigitoCPF !== segundoDigitoCalculado) {
//         input.setCustomValidity("Este não é um CPF válido");
//         return;
//     }

//     input.setCustomValidity("");
//     return;
// };

const ehUmCFPComNumerosRepetidos = cpf => {
    const CPFsINVALIDOS = [
      11111111111,
      22222222222,
      33333333333,
      44444444444,
      55555555555,
      66666666666,
      77777777777,
      88888888888,
      99999999999
    ];
  
    if (CPFsINVALIDOS.includes(cpf)) {
      return true;
    }
  
    return false;
  };
  
  const calcularValorTotal = multiplicador => (resultado, numeroAtual) =>
    resultado + numeroAtual * multiplicador--;
  
  const calcularDigito = (parteCPF, multiplicador) => {
    let digitoGerado = 0;
    let valorTotal = 0;
  
    valorTotal = parteCPF.reduce(calcularValorTotal(multiplicador), 0);
  
    digitoGerado = 11 - (valorTotal % 11);
  
    if (digitoGerado > 9) {
      digitoGerado = 0;
    }
  
    return digitoGerado;
  };
  
  export const validarCPF = input => {
    const cpfNumeros = input.value
      .replace(/\D/g, "");
  
    console.log(cpfNumeros);
  
    if (ehUmCFPComNumerosRepetidos(cpfNumeros)) {
      input.setCustomValidity("Este não é um CPF válido");
      return;
    }
  
    const primeiraParte = cpfNumeros.substr(0, 9).split("");
    const primeiroDigitoDoCPF = Number(cpfNumeros.charAt(9));
    const primeiroDigitoGerado = calcularDigito(primeiraParte, 10);
    if (primeiroDigitoDoCPF !== primeiroDigitoGerado) {
      input.setCustomValidity("Este não é um CPF válido");
      return;
    }
  
    const segundaParte = cpfNumeros.substr(0, 10).split("");
    const segundoDigitoDoCPF = Number(cpfNumeros.charAt(10));
    const segundoDigitoGerado = calcularDigito(segundaParte, 11);
    if (segundoDigitoDoCPF !== segundoDigitoGerado) {
      input.setCustomValidity("Este não é um CPF válido");
      return;
    }
  
    input.setCustomValidity("");
  };
  